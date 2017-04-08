<?php
class ArticleController extends Controller
{
    public function index(){
        $model=new ArticleModel();

        $cid=isset($_GET['cid'])?$_GET['cid']:"";//分类id
        empty($cid)?$where="":$where='cid='.$cid.' and ';//判断分类id是否为空
        if(isset($_GET['keyword']))
        {
            $where.=" 1=1 and title like '%{$_GET['keyword']}%' or author like '%{$_GET['keyword']}%' ";
        }
        else
        {
            $where.=' 1=1';
        }
        //-------分页所需参数---begin
        $pageindex=isset($_GET['page'])?$_GET['page']:1;
        $pagesize=10;
        $strart=($pageindex-1)*$pagesize;
        $limit=" limit $strart,".$pagesize; //控制sql语句的显示条数
        $records=$model->getArticleCount($where);//获取列表总数量

        $locationcid=empty($cid)?'':'&cid='.$cid;
        $locationkey=isset($_GET['keyword'])?'&keyword='.$_GET['keyword']:'';
        if($records>0)
        {//分页模块
            $arr=array(
                'records'=>$records,
                'pageindex'=>$pageindex,
                'pagesize'=>$pagesize,
                'href'=>'c=Article&a=index'.$locationcid.$locationkey);
            $pconf=array('first'=>'<<','last'=>'>>','up'=>'<','next'=>'>','isstyle'=>true);
            $page=new Page($arr,$pconf);
            $pagelist=$page->loadPages();//获取分页模块str
        }
        //--------分页所需参数---end

        $data=$model->getArticle($where,$limit);



        //--------------------
        $this->smarty->assign('keyword',isset($_GET['keyword'])?$_GET['keyword']:"");
        $this->smarty->assign('page',isset($pagelist)?$pagelist:null);//绑定到smarty中
        $this->smarty->assign('cid',$cid);
        $this->smarty->assign('strcid',empty($cid)?'':'cid='.$cid);
        $this->smarty->assign('data',$data);
        $this->smarty->display('index.html');
    }
    public  function add()
    {
        //将地址栏的cid参数获取到,然后将它绑定到smarty模板变量中,而不是直接通过smarty保留变量直接获取
        isset($_GET['cid'])?$cid=$_GET['cid']:$cid="";
        $catemodel=new CategoryModel();

        $cdata=$catemodel->sortData($catemodel->getCategory(),0,0);

        $this->smarty->assign('cid',$cid);
        $this->smarty->assign('data',$cdata);
        $this->smarty->display('add.html');
    }
    public function addHandle()
    {
        $model=new ArticleModel();
       if($id=$model->insertArticle())
       {
           $this->setHtml($id);//自动生成文章静态页
           $this->updateCatehtml();//更新分类列表html
           $this->jump('添加成功','?c=Article&a=index');
       }
        else
        {
            $this->jump('添加失败','?c=Article&a=index');
        }
    }
    public function delHandle()
    {
        $id=isset($_GET['id'])?$_GET['id']:die;
        $cid=isset($_GET['cid'])?'&cid='.$_GET['cid']:'';
        $model=new ArticleModel();
        if($model->delArticle($id))
        {
            //删除成功,删除生成的静态页
            unlink('./Article/'.$id.'.html');
            $this->updateCatehtml();//更新分类列表html
            $this->jump('删除成功','?a=index&c=Article'.$cid);

        }
        else
        {
            $this->jump('删除失败','?a=index&c=Article'.$cid);
        }
    }
    public function delMoreHandle()
    {
        $id=isset($_POST['id'])?$_POST['id']:die;
        $cid=isset($_POST['cid'])?'&cid='.$_POST['cid']:'';
        $model=new ArticleModel();
        if($model->delMoreArticle($id))
        {
            foreach($id as $v) {
                unlink('./Article/' . $v . '.html');
            }
            $this->updateCatehtml();//更新分类列表html
            $this->jump('删除成功','?a=index&c=Article'.$cid);

        }
        else
        {
            $this->jump('删除失败','?a=index&c=Article'.$cid);
        }
    }
    public function update()
    {
        //查询单条信息
        $id=isset($_GET['id'])?$_GET['id']:die;
        $cid=isset($_GET['cid'])?$_GET['cid']:'';

        $model=new ArticleModel();
        $rows=$model->getArticleOne($id);

        $catemodel=new CategoryModel();
        $cdata=$catemodel->sortData($catemodel->getCategory(),0,0);//获取全部分类

        $this->smarty->assign('cid',$cid);//绑定这个cid是判断这从哪个页面过来的修改,分类管理的还是博文管理
        $this->smarty->assign('data',$cdata);
        $this->smarty->assign('rows',$rows);
        $this->smarty->display('update.html');
    }
    public function updateHandle()
    {

        //var_dump($_POST);DIE;
        $id=isset($_POST['id'])?$_POST['id']:die;
        $postcid=isset($_POST['cid'])?$_POST['cid']:'';//这个是当前回来的参数

        $urlcid=isset($_POST['urlcid'])?$_POST['urlcid']:'';
        empty($urlcid)?$cid="":$cid="&cid=".$postcid;//不为空就是从分类管理过来的//为空就是从博文管理过来的

        //如果修改它的分类,就调回到他修改的分类管理页面去,如果不修改分类就返回访问前的页面
        $model=new ArticleModel();


        if($model->updateArticle($id))
        {
            //修改成功,删除原有的图片,如果没图片就将跳过
            if(!empty($_POST['pic_src']))
            {
                if(file_exists($_POST['pic_src'])) {
                    unlink($_POST['pic_src']);
                }
            }
            //修改成功,自动重新生成静态页
            $this->setHtml($id);

            $this->updateCatehtml();
            //!empty($_POST['pic_src'])?:function(){};//使用错误抑制符 如
            $this->jump('修改成功','?a=index&c=Article'.$cid);
        }
        else
        {
            $this->jump('修改失败','?a=index&c=Article'.$cid);
        }
    }

    public function Tohtml()
    {
        $this->smarty->display('html.html');
    }
    //将所有的文章生成静态页面
    public function cshtml()
    {
        $model= new ArticleModel();
        $data=$model->getArticle();
        include_once './App/Home/Model/ListModel.class.php';

        //右侧彩色4个边框
        $cateModel=new CategoryModel();
        $rightArr=$cateModel->_getCategory();
        $_rightarr=$rightArr;
        $hits=$this->gethistTo9();//获取点击数量最高的前9行

        foreach($data as $k => $v)
        {
            ob_start();//开启缓冲
            ob_clean();

            $model1=new ListModel();
            $row1= $model1->getArtInfo($v['articleid']);
            $class1=$model1->_getSiteMap($row1['cid']);
            //获取文章的上一篇下一篇
            $data_updown=$model->getArticleUpAndDown($v['articleid']);

            $this->smarty->assign('rightarr',array_reverse($_rightarr));//右侧彩色4个边框栏

            $this->smarty->assign('hits', $hits);
            $this->smarty->assign('data_updown',$data_updown);
            $this->smarty->assign('class',$class1);
            $this->smarty->assign('row',$row1);
            $this->smarty->display('info.html');

            $str=ob_get_contents();
            ob_end_clean();//清除缓冲,
            file_put_contents('./Article/'.$v['articleid'].'.html',$str);
        }
        //$this->jump('操作已完成',)
        echo json_encode(true);
    }
    //将指定id的文章生成静态页面
    public function cshtmlone()
    {
        //echo json_encode($_POST);die;
        //获取ajax通过post传过来的文章id
        if(isset($_POST['id']))
        {
            $id=$_POST['id'];
            if($this->setHtml($id)!==false)
            {
                echo json_encode(true);
            }
            else
            {
                echo json_encode(false);
            }
        }
        else
        {
            echo json_encode(false);
        }
    }
    //指定文章id生成静态页
    private function setHtml($id)
    {
        include_once './App/Home/Model/ListModel.class.php';
        $model = new ArticleModel();
        $data = $model->getArticle();

        ob_start();//开启缓冲
        ob_clean();
        //获取站点地图---------
        $model1 = new ListModel();
        $row1 = $model1->getArtInfo($id);
        $class1 = $model1->_getSiteMap($row1['cid']);
        //获取站点地图end--------------------
        //获取文章的上一篇下一篇
        $data_updown=$model->getArticleUpAndDown($id);

        //右侧彩色4个边框
        $cateModel=new CategoryModel();
        $rightArr=$cateModel->_getCategory();
        $_rightarr=$rightArr;

        $hits=$this->gethistTo9();//获取点击数量最高的前9行
        $this->smarty->assign('hits', $hits);
        $this->smarty->assign('rightarr',array_reverse($_rightarr));//右侧彩色4个边框栏
        $this->smarty->assign('data_updown',$data_updown);
        $this->smarty->assign('class', $class1);

        $this->smarty->assign('row', $row1);
        $this->smarty->display('info.html');

        $str = ob_get_contents();
        ob_end_clean();//清除缓冲,
      return  file_put_contents('./Article/' . $id . '.html', $str);
    }
    //获取点击排行前9条
    public function gethistTo9()
    {
        $sql ="select name,articleid,cid,ctime,title,content,author,ptime,utime,hits,keyword,description,alias,pic ";
        $sql.="from article inner join category on cid=categoryid order by hits desc limit 9";
        $model=new Model();
        return  $model->select($sql);
    }
    public function updateCatehtml()
    {
        //接下来 应该重新更新所有文章的静态页面
        $cateconlller = new CategoryController();
        $cateconlller->updateCateHtml();
    }


    private function put_Params()
    {
        $ptime=mktime(0,0,0,4,4,2016);//先默认下值
        $params=array(
            'cid'=>2,
            'ctime'=>time(),
            'title'=>'bbbb2',
            'content'=>'ccccc3',
            'author'=>isset($_SESSION['user'])?$_SESSION['user']['adminname']:"匿名",
            'ptime'=>$ptime,//|
            'utime'=>time(),//|
            'hits'=>5555,
            'keyword'=>'测试k',
            'description'=>'测试d',
            'alias'=>'测试a',
            'pic'=>'ceship',
        );
        return $params;
    }
}
//articleid 文章id
//cid    分类id
//ctime   创建时间  程序自动获取
//title  标题
//content  内容
//author  作者
//ptime  发布时间
//utime  修改时间    程序自动获取
//hits   点击数
//keyword   文章关键字(seo)
//description  文章描述(seo)
//alias   别名(seo)
//pic    图片

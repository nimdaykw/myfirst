<?php

class CategoryController extends Controller
{
	public function index()
	{
		$model=new CategoryModel();
		$data=$model->sortData($model->getCategory(),0,0);

		$this->smarty->assign('data',$data);
		$this->smarty->display('index.html');
	}
	public function add()
	{

		$model=new CategoryModel();
		$data=$model->sortData($model->getCategory(),0,0);

		$this->smarty->assign('data',$data);
		$this->smarty->display('add.html');
	}
	public function addHandle()
	{
		$model=new CategoryModel();
		if($id=$model->addCategory())
		{
			$this->csclasshtml($id);//生成该分类的静态页面
			echo "<script>alert('添加成功');location.href='?c=Category&a=index'</script>";
		}
		else
		{
			echo "<script>alert('添加失败');history.back()</script>";
		}

	}
	public function update()
	{
		$id=isset($_GET['id'])?$_GET['id']:die;

		$model=new CategoryModel();
		//获取递归排序好的所有非当前id的信息
		$data=$model->sortData($model->getCategoryWhere($id));
		$row=$model->getCategoryOne($id);
		//获取当前id的信息
		$this->smarty->assign('row',$row);
		$this->smarty->assign('data',$data);

		$this->smarty->display('update.html');
	}
	public function updateHandle()
	{
		$model=new CategoryModel();
		if($model->updateCategory())
		{
			$this->csclasshtml($_POST['id']);//重新生成该分类的静态页面
			$this->updateArticleall();//从新生成所有文章的静态页面
			echo "<script>alert('修改成功');location.href='?c=Category&a=index'</script>";
		}
		else
		{
			echo "<script>alert('修改失败');history.back()</script>";
		}
	}
	//删除一个条信息以及它子级下的所有信息
	public function delHandle()
	{
		$id = isset($_GET['id'])?$_GET['id']:die;
		//当前分类如果没有文章,可以删除,如果有,则不予许删除,//强行删除,输入管理员操作码可以继续执行
		//先查询当前分类下有没有文章
		//$artmodel=new ArticleModel();
		//$artbycidCount=$artmodel->getArticleCount("cid=$id");
		//$artbycidCount? print $artbycidCount: print 'no';
		//die;
		$model=new CategoryModel();

		$data=$model->getCategory();

		$data=$model->sortData($data,$id,0);
		
		$strids=$id.',';
		if($data)
		{
			foreach ($data as $key => $value) {
				$strids.=$value['categoryid'].',';
			}
		}
		$strids=substr($strids,0,-1);
		//调用方法执行删除
		if($model->delCategory($strids))
		{
			echo "<script>alert('删除成功');location.href='?c=Category&a=index'</script>";
		}
		else
		{
			echo "<script>alert('删除失败');location.href='?c=Category&a=index'</script>";
		}
	}

	public function ajaxdelHandle()
	{
		$id = isset($_GET['id'])?$_GET['id']:print json_encode(false);
		$break=isset($_GET['isbreak'])?$_GET['isbreak']:false;
		$isckadmin=isset($_GET['isckadmin'])?$_GET['isckadmin']:false;
		if(!$break)
		{
			//先查询是否当前文章是否有记录
			$artmodel=new ArticleModel();
			$artbycidCount=$artmodel->getArticleCount("cid=$id");
			if($artbycidCount!=0)
			{
				echo json_encode(false);//false不可以删,但是可以强制删除
			}
			else
			{
				//可以执行删除
				if($return=$this->ajaxtext($id))
				{

					echo json_encode($return);
				}
				else
				{
					echo json_encode(false);
				}
			}
		}
		else
		{
			if($isckadmin)
			{
				$adminkey=isset($_GET['adminkey'])?$_GET['adminkey']:"";
				if($adminkey=='admin')
				{
					//验证通过
					//执行删除
					if($result=$this->ajaxtext($id))
					{
						echo json_encode($result);
					}
				}
				else
				{
					//验证失败
					echo json_encode(false);
				}
			}
		}
	}
	public function ajaxtext($id)
	{
		//当前分类如果没有文章,可以删除,如果有,则不予许删除,//强行删除,输入管理员操作码可以继续执行
		//先查询当前分类下有没有文章

		$model=new CategoryModel();

		$data=$model->getCategory();

		$data=$model->sortData($data,$id,0);

		$strids=$id.',';
		$returnjson=array($id);
		if($data)
		{
			foreach ($data as $key => $value) {
				$strids.=$value['categoryid'].',';
				$returnjson[]=$value['categoryid'];
			}
		}
		$strids=substr($strids,0,-1);
		//调用方法执行删除
		if( $model->delCategory($strids))//1==1 or
		{
			$this->csclasshtml($id);//重新生成该分类的静态页面
			//接下来 应该重新更新所有文章的静态页面
			$this->updateArticleall();
			@unlink('./List/'.$id.'/1.html');
			foreach ($data as $key => $value) {
				@unlink('./List/'.$value['categoryid'].'/1.html');
			}
//			echo "<script>alert('删除成功');location.href='?c=Category&a=index'</script>";
			return $returnjson;
		}
		else
		{
			return false;
		}
	}

	//更新所有文章的静态页面
	public  function updateArticleall()
	{
		//接下来 应该重新更新所有文章的静态页面
		$artconlller = new ArticleController();
		ob_start();
		$artconlller->cshtml();
		ob_end_clean();
	}
	//更新所有分类的
	public function updateCateHtml()
	{

		//sleep(1);//就延迟显示一秒,要个效果,不然加载太快
		$model=new CategoryModel();
		$data=$model->getCategory();
		//echo json_encode($data);die;
		foreach($data as $k => $v)
		{
			if(!$this->csclasshtml($v['categoryid']))
			{
				return false;
			}
		}
		return true;
	}
	public function ajax_set_class_html_all()
	{
		sleep(1);//就延迟显示一秒,要个效果,不然加载太快
		$model=new CategoryModel();
		$data=$model->getCategory();
		//echo json_encode($data);die;
		foreach($data as $k => $v)
		{
			if(!$this->csclasshtml($v['categoryid']))
			{
				echo json_encode(false);
				die;
			}
		}
		echo json_encode(true);
	}
	public function ajax_set_class_html_one()
	{
		if(isset($_POST['cid']))
		{
			$id=$_POST['cid'];
			if($this->csclasshtml($id))
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
			echo json_encode(true);
		}

	}

	//生成当前分类下的所有静态页
	private function csclasshtml($cid)
	{
		try {
			//绑定站点地图 先使用现成的方法在ListModel类中,我已经写了,先实现功能,后期挪过来来categoryModel中
			//先引入ListModel类
			include_once './App/Home/Model/ListModel.class.php';
			//实例化ListModel
			$listmodel = new ListModel();
			//得到站点地图的数据
			$class = $listmodel->_getSiteMap($cid);
			//右侧彩色4个边框
			$cateModel=new CategoryModel();
			$rightArr=$cateModel->_getCategory();
			$_rightarr=$rightArr;
			//echo json_encode($_rightarr);die;
			//点击排行
			$hits=$this->gethistTo9();//获取点击数量最高的前9行

			//print_r($class);die;
			$artmodel = new ArticleModel();
			$where = 'cid=' . $cid;//添加where判断
			$where.=" or cid in (select categoryid from category where pid=$cid) ";//将子类的分类文章查出来
			//每页显示多少条信息
			$pagesize = 10;

			$records = $artmodel->getArticleCount($where);//获取列表总数量

			//------循环前需要做的是 !!!提前创建文件夹-----------
			$htmlpath = './List/' . $cid . '/';//需要放的目录
			if (!file_exists($htmlpath)) @mkdir($htmlpath, 0777, true);//创建目录
			//---------end-----------------
			if($records<1)
			{
				//也就是没数据 ,将直接生成一个html,并不显示分页,
				//开启缓冲
				ob_start();
				//先清除缓冲,防止前面有输出内容
				ob_clean();
				//绑定smarty变量
				$this->smarty->assign('hits', $hits);//点击排行
				$this->smarty->assign('rightarr',array_reverse($_rightarr));//右侧彩色4个边框栏
				$this->smarty->assign('page', null);//分页数据
				$this->smarty->assign('class', $class);//站点地图
				$this->smarty->assign('data', null);//当前页数据
				$this->smarty->display('list.html');
				$html = ob_get_contents();//获取输出缓冲区的内容
				ob_end_clean();//清空缓冲区,并关闭缓冲区
				//生成html页面
				file_put_contents($htmlpath . 1 . '.html', $html);
			}
			//得到页码数
			$pagecount = ceil($records / $pagesize);


			//-------------end----------------------------
			//循环所有页码,根据页码生成html页面
			for ($i = 1; $i <= $pagecount; $i++) {
				//右侧彩色4个框
				$_rightarr=$rightArr;
				//用for循环模拟当前页
				$pageindex = $i;
				//page分页公式
				$strart = ($pageindex - 1) * $pagesize;
				//控制sql语句的显示条数
				$limit = " limit $strart," . $pagesize;
				//获取当前页的数据
				$data = $artmodel->getArticle($where, $limit);


				//获取到page分页的数据,先提前设置page类
				$arr = array(
						'records' => $records,
						'pageindex' => $pageindex,
						'pagesize' => $pagesize,
						'href' => "");
				$pconf = array(
						'first' => '<<',//首页
						'last' => '>>',//尾页
						'up' => '<',//上一页
						'next' => '>',//下一页的text显示
						'isstyle' => false,//不使用page自带的样式
						'cur_tagname' => 'b',//选中的page页码的标签
						'template' => 'html' //设置的page的适用模块
				);
				//实例化Page类
				$pageclass = new Page($arr, $pconf);
				//调用page类的LoadPages返回分页数据(是一串html代码)
				$pagestr = $pageclass->loadPages();

				//开启缓冲
				ob_start();
				//先清除缓冲,防止前面有输出内容
				ob_clean();
				//绑定smarty变量
				$this->smarty->assign('hits', $hits);//点击排行
				$this->smarty->assign('rightarr',array_reverse($_rightarr));//右侧彩色4个边框栏
				$this->smarty->assign('page', $pagestr);//分页数据
				$this->smarty->assign('class', $class);//站点地图
				$this->smarty->assign('data', $data);//当前页数据
				$this->smarty->display('list.html');
				$html = ob_get_contents();//获取输出缓冲区的内容
				ob_end_clean();//清空缓冲区,并关闭缓冲区
				//生成html页面
				file_put_contents($htmlpath . $i . '.html', $html);
			}
		}
		catch(Exception $e)
		{
			return false;
		}
		return  true;
	}

	//获取点击排行前9条
	public function gethistTo9()
	{
		$sql ="select name,articleid,cid,ctime,title,content,author,ptime,utime,hits,keyword,description,alias,pic ";
		$sql.="from article inner join category on cid=categoryid order by hits desc limit 9";
		$model=new Model();
		return  $model->select($sql);
	}
}


?>
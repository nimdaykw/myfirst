<?php
class IndexController extends Controller
{
    public function index()
    {
        $model=new IndexModel();
        $data=$model->getFiveArticleByhits();

        include_once './App/Admin/Model/CategoryModel.class.php';
        //右侧彩色4个边框
        $cateModel=new CategoryModel();
        $rightArr=$cateModel->_getCategory();
        $_rightarr=$rightArr;

        //最新文章
        $newdata= $this->getNewArt();

        $this->smarty->assign('rightarr',array_reverse($_rightarr));//右侧彩色4个边框栏
        $this->smarty->assign('data',$data);
        $this->smarty->assign('newdata',$newdata);
        $this->smarty->display('index.html');

    }
    public function getNewArt()
    {
        $sql='select * from article order by ctime limit 9';
        $model=new Model();
       return  $model->select($sql);
    }


}

?>
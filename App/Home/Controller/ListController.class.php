<?php
class ListController extends Controller
{
    function index()
    {
        $cid=isset($_GET['cid'])?$_GET['cid']:0;
        $model=new ListModel();

        $class=$model->getCategorySiteMap($cid);
        //print_r($class);die;
        $data=$model->getArtlist($cid);
        //$class=$model->getCategoryNamebyArtCid($cid);

        //显示列表
        //需求,当有从类别中进入的该页面,查询该分类下以及他子分类的文章
        //直接进来,只需要查询当前分类下的文章
        $this->smarty->assign('class',$class);
        $this->smarty->assign('data',$data);
        $this->smarty->display('list.html');
    }
    public function info()
    {
        $id=isset($_GET['id'])?$_GET['id']:die;
        $model=new ListModel();
        $row= $model->getArtInfo($id);
        $class=$model->getCategorySiteMap($row['cid']);

        $this->smarty->assign('class',$class);
        $this->smarty->assign('row',$row);
        $this->smarty->display('info.html');
    }
}



?>
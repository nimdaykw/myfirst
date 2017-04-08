<?php

class IndexController extends CommonController{

	public function index()
	{

		$this->smarty->assign('user',$_SESSION['user']['adminname']);
		$this->smarty->display('index.html');

	}

}


 ?>
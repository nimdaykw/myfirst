<?php
class View{
	//这个类是引用smarty,设置smarty的参数
	public $smarty;
	public function __construct()
	{
		//实例化smarty类
		$this->smarty=new Smarty();
		//动态设置smarty的模板文件目录
		$this->smarty->setTemplateDir(VIEW_PATH.C);
		//echo VIEW_PATH.C;die;
		//设置smarty的运行编译文件
		$this->smarty->setCompileDir(APP_PATH.'Runtime');
	}

}
?>

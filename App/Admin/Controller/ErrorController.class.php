<?php
//这是一个错误信息处理的控制器
class Error extends Controller
{
	public function __construct()
	{
		//构造方法
		//读取
	}
	//向日志文件插入一个信息
	public function set_log()
	{
		$dir=$this->get_log_dir();
		//建立一个error的的日志文件
		$filename=date('YmdHis').'.txt';
		file_get_contents($filename);
		$fileDir=$logdir=1;
		$filename=date('Y-m-d H:i:s'.'txt');
	}
	//获得log的文件目录
	public function get_log_dir()
	{
		$dir=APP_PATH.'log';//log根目录
		$filedir=$dir.'/'.date('Y-m-d');//当天的log文件目录
		if(file_exists($dir))
		{
			//存在当前目录
			if(!file_exists($filedir)) @mkdir($filedir);//创建今天的目录
		}
		else
		{
			if(@mkdir($dir))if(!file_exists($filedir))@mkdir($filedir);//创建今天的目录//创建目录成功
		}
		return $filedir;
	}
	//区分错误的内心
}
?>
<?php
class PublicController
{
	//这是一个公开控制器
	public function __construct()
	{

	}
	//获取验证码
	public function code()
	{
		$verify=new Verify();
		$varify->verify();
	}
}



 ?>
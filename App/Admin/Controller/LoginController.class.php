<?php
class LoginController extends Controller
{
	public function login()
	{
		//加载模板
		$this->smarty->display('login.html');
	}
	//校验表单数据
	public function verifyInput()
	{
		$code=$_POST['verifycode'];
		if($code!=$_SESSION['code'])
		{
			//echo "<script>alert('验证码不正确');history.back()</script>";
			$this->returnJSON('验证码不正确','goback');
			die;
		}
	}
	//用ajaax调用的方法需要通过json返回
	public function returnJSON($msg,$url)
	{
		//首先返回2个参数,一个提示语,一个地址参数
		//
		$result = array('msg'=>$msg,'url'=>$url);
		echo json_encode($result);
	}


	//用于ajax调用的登陆
	public function loginHandle()
	{

		//var_dump($_POST);
		//json_encode(true);
		$this->verifyInput();

		//$_POST['verifycode'];//验证码
		//获取参数
		$adminname=$_POST['user'];
		$pwd=md5($_POST['pwd']);


		//防止sql注入,先按照用户名去查询
		//然后拿到查询的密码,进行比对
		//验证通过执行下一步
		$model=new LoginModel();
		$result=$model->ckuser($adminname,$pwd);
		if($result)
		{
			//该用户名存在,则将查询出来的pwd进行跟post中的pwd进行比对
			if($result['pwd']==$pwd)
			{
				//登陆成功
				//设置session
				$_SESSION['user']=array('adminname'=>$adminname);
				//修改登陆时间和IP
				$lastlogintime=time();
				$lastloginip=$_SERVER['REMOTE_ADDR'];
				$params=array(
				'lastlogintime'=>$lastlogintime,
				'lastloginip'=>$lastloginip,
				'adminname'=>$adminname,
				'pwd'=>$pwd
				);
				if($model->modifyLoginState($params)!==false)
				{
					//修改最后登陆时间,登陆ip成功
					//echo "<script>alert('登陆成功');location.href='?C=Index&A=index&M=Admin';</script>";
					$this->returnJSON('登陆成功','?C=Index&A=index&M=Admin');
				}
				else
				{
					//echo "<script>alert('服务器忙,请联系相关人员');history.back()</script>";
					$this->returnJSON('服务器忙,请联系相关人员','goback');
				}
			}
			else
			{
				//比对失败,密码错误
				//echo "<script>alert('密码错误');history.back()</script>";
				$this->returnJSON('密码错误','goback');
			}
		}
		else
		{
			//该用户名不存在
			//echo "<script>alert('该用户名不存在');history.back()</script>";
			$this->returnJSON('该用户不存在','goback');
		}
	}
	public function loginout()
	{
		unset($_SESSION['user']);
		echo "<script>alert('成功退出');location.href='?C=Login&a=login';</script>";
	}

}

?>

<?php
class LoginModel extends Model
{
	public function ckUser($adminname,$pwd)
	{
		//$sql="select count(*) from admin where adminname='$adminname' and pwd='$pwd'";

		$sql="select pwd from admin where adminname='$adminname'";
		//echo $sql;die;
		return $this->find($sql);
	}
	public function modifyLoginState($params)
	{
		$sql="update admin set lastlogintime=".$params['lastlogintime'].",lastloginip='".$params['lastloginip']."' where adminname='".$params['adminname']."' and pwd='".$params['pwd']."'";
		return $this->sava($sql);
	}
}
?>
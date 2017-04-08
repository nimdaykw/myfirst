<?php
class MyDb
{
	public $pdo;
	private static $Ins=null;
	private function __clone(){}
	private function __construct()
	{
		$this->conn();
	}
	public static function getIns()
	{
		if(self::$Ins===null)
		{
			self::$Ins=new self();
		}
		return self::$Ins;
	}
	private function conn()
	{
		//$GLOBAS
		//连接数据库
	$dsn=$GLOBALS['DB_TYPE'].":host=".$GLOBALS['DB_HOST'].";dbname=".$GLOBALS['DB_NAME'].";charset=".$GLOBALS['DB_CHARSET'];
		$this->pdo=new PDO($dsn,$GLOBALS['DB_USER'],$GLOBALS['DB_PWD']);
	}
}



 ?>
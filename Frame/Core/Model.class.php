<?php
class Model
{
	//这是一个xxxModel类的基类,里面有增删查改
	private $pdo;
	public function __construct()
	{
		//构造方法
		//实例化db类
		$db=MyDb::getIns();
		$this->pdo=$db->pdo;
		//var_dump($this->db->pdo);
	}
	//查询多行信息
	public function select($sql,$params=array())
	{
		if($params)
		{
			//使用预处理方式
			$PDOstatement=$this->pdo->prepare($sql);

			//有参数,循环绑定
			foreach ($params as $key => $value) {
				$PDOstatement->bindValue($key,$value);
			}
			$PDOstatement->execute();//执行
			$result = $PDOstatement->fetchAll(PDO::FETCH_ASSOC);//
			return $result;
		}
		else
		{
			//参数数组为空就直接执行sql语句
			$PDOstatement=$this->pdo->query($sql);
			return $PDOstatement->fetchAll(PDO::FETCH_ASSOC);
		}
	}
	//查询一行数据 返回的是一维数组 支持预处理 使用命名占位符
	public function find($sql,$params=array())
	{
		if($params)
		{
			//有值执行预处理
			$PDOstatement=$this->pdo->prepare($sql);
			//绑定
			foreach ($params as $key => $value) {
				$PDOstatement->bindValue($key,$value);
			}
			try
			{
				$PDOstatement->execute();
				return $PDOstatement->fetch();//返回一行数据
			}
			catch(PDOException $e)
			{
				return false;
			}
		}
		else
		{	//参数数组为空就直接执行sql语句
			$PDOstatement=$this->pdo->query($sql);
			return $PDOstatement->fetch();
		}
	}
	//返回的是
	public function count($sql)
	{
		$PDOstatement=$this->pdo->query($sql);
		//echo $sql;die;
		return $PDOstatement->fetchColumn();//默认是第一行第一列
	}

	//添加一条数据
	public function insert($sql,$params=array())
	{
		if($params)
		{
			//预处理
			$PDOstatement= $this->pdo->prepare($sql);
			//绑定占位符
			foreach ($params as $key => $value) {
				$PDOstatement->bindValue($key,$value);
			}
			try
			{
				$PDOstatement->execute();
				return $this->pdo->lastInsertId();
			}
			catch(PDOException $e)
			{
				echo "<script>".$e->errorinfo."</script>";
				return false;
			}
		}
		else
		{
			//直接执行
			$this->pdo->exec($sql);
			return $this->pdo->lastInsertId();
		}
	}
	//修改一条数据
	public function sava($sql,$params=array())
	{
		if($params)
		{
			//预处理
			$PDOstatement= $this->pdo->prepare($sql);
			//绑定占位符
			foreach ($params as $key => $value) {
				$PDOstatement->bindValue($key,$value);
			}
			try
			{
				$PDOstatement->execute();
				return $PDOstatement->rowCount();
			}
			catch(PDOException $e)
			{
				return false;
			}
		}
		else
		{
			//直接执行
			return $this->pdo->exec($sql);
			return $PDOstatement->rowCount();
		}
	}
	//删除一条数据
	public function delete($sql,$params=array())
	{
		if($params)
		{
			//预处理
			$PDOstatement= $this->pdo->prepare($sql);
			//绑定占位符
			foreach ($params as $key => $value) {
				$PDOstatement->bindValue($key,$value);
			}
			$PDOstatement->execute();
			return $PDOstatement->rowCount();
		}
		else
		{
			//直接执行
			return  $PDOstatement=$this->pdo->exec($sql);
		}
	}

}



 ?>
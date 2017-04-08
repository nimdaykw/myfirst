<?php
class StudentModel extends Model
{
	//这里是访问数据库
	public function getStudent()
	{
		$sql="select * from student order by id desc";
		return $this->select($sql);
	}
	public function getOndStudent($id)
	{
		$sql="select * from student where id=:id ";
		return $this->find($sql,array(':id'=>$id));
	}
	public function setStudent()
	{
		$sql="update student set  name=:name,age=:age,sex=:sex,edu=:edu,city=:city where id=:id";
		//echo $sql."<br/>";
		$params=array();
		foreach ($_POST as $key => $value) {
				$params[':'.$key]=$value;
		}
		//var_dump($params);die;
		return $this->sava($sql,$params);
	}
	public function delStudent($id)
	{
		$sql = "delete from student where id=:id";
		$this->delete($sql,array(':id'=>$id));
	}
	public function insertStudent()
	{
		$sql="insert into student(name,sex,age,edu,city) values(:name,:sex,:age,:edu,:city)";
		$params=array();
		foreach ($_POST as $key => $value) {
			$params[':'.$key]=$value;
		}
		return $this->insert($sql,$params);
	}
}


?>
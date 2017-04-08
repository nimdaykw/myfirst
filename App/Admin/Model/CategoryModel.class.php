<?php
class CategoryModel extends Model
{
	//对拿到的数组按分类一级一级的递归派讯
	public function  sortData($data,$pid=0,$lev=0)
	{
		static $arr=array();//创建一个静态变量
		foreach ($data as $key => $value) {
			if($value['pid']==$pid)
			{
				$value['lev']=$lev;
				$arr[]=$value;
				$this->sortData($data,$value['categoryid'],$lev+1);
			}
		}
		return $arr;
	}
	public function getCategory()
	{

		$sql="select * from category";
		//$sql=" select c1.name,c1.categoryid,c1.pid,c2.name as pname from category as c1 ";
		$sql=" select (SELECT count(*) FROM article where cid=c1.categoryid) as artcount,c1.name,c1.categoryid,c1.pid,c2.name as pname from category as c1 ";
		$sql.=" left join category as c2 on c1.pid=c2.categoryid ";
		return $this->select($sql);
	}
	public function _getCategory()
	{
		$sql="select * from category";
		return $this->select($sql);
	}
	public function getCategoryWhere($id)
	{
		$sql=" select c1.name,c1.categoryid,c1.pid,c2.name as pname from category as c1 ";
		$sql.=" left join category as c2 on c1.pid=c2.categoryid where c1.categoryid !='$id'";
		return $this->select($sql);
	}
	public function  getCategoryOne($id)
	{
		$sql="select * from category where categoryid='$id'";
		return $this->find($sql);
	}
	public function delCategory($ids)
	{
		$sql="delete from category where categoryid in ($ids)";
		return $this->delete($sql);
	}


	
	//添加一条分类信息
	public function addCategory()
	{
		$sql="insert into category(name,pid) values(:name,:pid)";
		$params=array();
		foreach ($_POST as $key => $value) {
			$params[':'.$key]=$value;
		}
		return $this->insert($sql,$params);
	}
	//修改一条分类信息
	public function updateCategory()
	{
		$sql="update  category set name=:name,pid=:pid where categoryid=:id";
		$params=array();
		foreach ($_POST as $key => $value) {
			$params[':'.$key]=$value;
		}
		return $this->sava($sql,$params);
	}
}


 ?>
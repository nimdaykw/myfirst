<?php
class StudentController extends Controller
{

	public function test()
	{
		//echo '<script>alert("这是'.M.'里面的'.C.'控制器的'.A.'方法");</script>';
		//echo '这是'.M.'模块的'.C.'控制器的'.A.'方法';
	}
	public function index()
	{
		$stu=new StudentModel();
		$data=$stu->getStudent();

		$this->smarty->assign('data',$data);
		$this->smarty->assign('abc','wordgo.StudentController.class.php biubiubiu');
		$this->smarty->display('index.html');
	}
	public function update()
	{
		$stu=new StudentModel();
		if($stu->setStudent()!==false)
		{
			//修改成功,跳转
			echo '<script>alert("修改成功");location.href="?C=Student&A=index"</script>';
		}
		else
		{
			//修改失败,返回上一页
			echo '<script>history.back()</script>';
		}
	}
	public function edit()
	{
		//绑定数据
		$stu=new StudentModel();
		$id=isset($_GET['id'])?$_GET['id']:die;
		$row=$stu->getOndStudent($id);
		//绑定模板变量
		$this->smarty->assign('row',$row);
		//绑定模板
		$this->smarty->display('edit.html');
	}
	public function delete()
	{
		$id=isset($_GET['id'])?$_GET['id']:die;
		$stu=new StudentModel();
		if($stu->delStudent($id)!==false)
		{
			//修改成功,跳转
			echo '<script>alert("删除成功");location.href="?C=Student&A=index"</script>';
		}
		else
		{
			//修改失败,返回上一页
			echo '<script>history.back()</script>';
		}
	}
	public function add()
	{
		$this->smarty->display('add.html');
	}
	public function insert()
	{
		$stu=new StudentModel();
		if($stu->insertStudent()>0)
		{
			//修改成功,跳转
			echo '<script>alert("添加成功");location.href="?C=Student&A=index"</script>';
		}
		else
		{
			//修改失败,返回上一页
			echo '<script>history.back()</script>';
		}
	}
}


?>
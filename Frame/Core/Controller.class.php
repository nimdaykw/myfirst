<?php

class Controller
{
	public $smarty;//smarty对象
	//这个类是控制器的基类,所有的控制器都需要继承这个类
	public function __construct()
	{
		if(method_exists($this,'verifySession'))
		{
			$this->verifySession();
		}

		$view=new View();
		$this->smarty=$view->smarty;
		//初始化绑定模板变量
		$this->smarty->assign('CSS',CSS_PATH);
		$this->smarty->assign('JS',JS_PATH);
		$this->smarty->assign('IMAGES',IMAGES_PATH);
	}
	public function adminSet()
	{
		//强行删除,输入管理员操作码可以继续执行
		//需要解决的问题,
		//php弹出一个输入框
		//验证这个值,并且继续执行当前操作

	}
	public function dump($arr)
	{
		echo '<pre>';print_r($arr);echo'</pre>';
	}

	//跳转到哪个页面
	public function jump($msg,$url,$time=1,$isclosebtn=true)
	{
		header('content-type:text/html;charset=utf-8');
        /*$js='<script type="text/javascript" src="'.JS_PATH.'jquery-3.1.1.js"></script>';
            $js.='<script>';
            //--------------------------
            $js.='$(function(){';
            //jquery dom加载完成 函数开始
            $js.='$("#closediv").click(function(){$(\'#msgdiv\').remove();})';
            $js.='setInterval("downtime",1000);';
            //jquery dom加载完成 函数结束
            $js.='})';
            //--------------------------
            $js.='function downtime() {alert("ds"); $("#sec").val($("#sec").val()-1);}';
            $js.='</script>';

         //if($isclosebtn){
            //关闭div begin.....
        //    $msgbox.='<span id="closediv" onmouseover=this.style.background="#CCC" onmouseout=this.style.background="" style="width:60px;height:25px; ';
        //    $msgbox.='border-left:1px solid #ccc;border-bottom: 1px solid #ccc; float:right; cursor: pointer;">关闭</span>';
            //关闭div end.....
       // }
        */

        //弹出框提示开始
        $msgbox='<div id="msgdiv" style=" background:#f2f2f2; border:1px solid #ccc;width:300px;height:180px;text-align:center;position:fixed;left:35%;top:30%;">';
        //显示内容 begin......
        $msgbox.='<span style="display: block;margin-top: 60px;height:50px;line-height: 55px; border-top:1px solid #ccc;border-bottom:0px solid #ccc;">';
        $msgbox.=$msg."<br/><span id='sec'>{$time}</span>s后自动为您跳转...";
        $msgbox.='</span>';
        //显示内容 end....
        $msgbox.='</div>';

        echo $msgbox;
		header("refresh:$time;url=$url");
		exit;
	}

}

?>
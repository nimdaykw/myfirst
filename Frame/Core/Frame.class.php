<?php
//这是一个访问引导类
class Frame
{
	public static function run()
	{
		//当前方法为执行方法,将所有需要执行的方法,按顺序执行
	 	self::readConfig();//读取配置文件
	 	self::startSession();//开启session
	 	self::setConst();
	 	self::autoLoad();//自动引入类文件
	 	self::fenfa();
	}
	//开启session
	public static function startSession()
	{
		session_start();
	}
	//读取配置文件 定义全局变量
	public static function readConfig()
	{
		//引用已经配置好的config类并拿到配置文件配置项
		$conf= include_once '/Frame/Config/Config.php';
		foreach ($conf as $key => $value) {
			$GLOBALS[$key]=$value;
		}


		//并定义成常量,存储  也可以定义成全局变量 $GLOBALS['']
		//define('METHOD',$conf['METHOD']);//访问类型,前台还是后台的配置值
		//define('CONTERLLER',$conf['CONTERLLER']);//控制器的配置值
		//define('ACTION',$conf['ACTION']);//执行的方法,也就是动作的配置值
		//self::dump($GLOBALS);
	}
	//定义地址栏参数的常量
	public static function setConst()
	{	//为什么要定义常量???定义静态变量或者成员属性不也可以吗?
		////index.php?M= &C= &A接收地址栏的值,并定义常量存储
		$m=isset($_GET['M'])? $_GET['M']:(isset($_GET['m'])?$_GET['m']:$GLOBALS['METHOD']);	define('M', $m);
		$c=isset($_GET['C'])? $_GET['C']:(isset($_GET['c'])?$_GET['c']:$GLOBALS['CONTERLLER']);	define('C', $c);
		$a=isset($_GET['A'])? $_GET['A']:(isset($_GET['a'])?$_GET['a']:$GLOBALS['ACTION']);		define('A', $a);
		//$m=isset($_GET['M'])? $_GET['M']:$GLOBALS['METHOD'];		define('M', $m);
		//$c=isset($_GET['C'])? $_GET['C']:$GLOBALS['CONTERLLER'];	define('C', $c);
		//$a=isset($_GET['A'])? $_GET['A']:$GLOBALS['ACTION'];		define('A', $a);
		//定义mvc类文件夹目录常量,用来自动动态引用类文件
		define('CONTROLLER_PATH',APP_PATH.$m.'/Controller/');//controller
		define('MODEL_PATH',APP_PATH.$m.'/Model/');//model
		define('VIEW_PATH',APP_PATH.$m.'/View/');//view

		define('FRAME_PATH','./Frame/Core/');//定义Frame工具类文件地址
		define('SMARTY_PATH','./Frame/Smarty/');//定义smarty类文件地址

		//------------admin-----------------
		define('CSS_PATH','./Public/Admin/css/');//css文件目录
		define('FONTS_PATH','./Public/Admin/fonts/');//fonts文件目录
		define('IMAGES_PATH','./Public/Admin/images/');//images/文件目录
		define('JS_PATH','./Public/Admin/js/');//js文件目录
		//-------------home--------------
		define('_CSS_PATH','./Public/Home/css/');//css文件目录
		define('_FONTS_PATH','./Public/Home/fonts/');//fonts文件目录
		define('_IMAGES_PATH','./Public/Home/images/');//images/文件目录
		define('_JS_PATH','./Public/Home/js/');//js文件目录
		//-------------public--------------
		define('_PUBLIC_','./Public/');//public主目录
		define('_PLUGINS','./Public/Plugins/');//public主目录
		define('_CK_PATH','./Public/Plugins/ckeditor/');//ckeditor目录
	}
	//自动引用类文件
	public static function autoLoad()
	{
	// ./Frame/Frame.class.php// ./Admin/Controller/Student/// ./Admin/Model/Student/
		spl_autoload_register(function($class){

			$path=array(
				FRAME_PATH.$class.'.class.php',
				CONTROLLER_PATH.$class.'.class.php',
				MODEL_PATH.$class.'.class.php',
				SMARTY_PATH.$class.'.class.php',
			);
			foreach($path as $value)
			{
				if(file_exists($value))	include_once($value);
			}
		});
	}
	//页面分发方法
	public static function fenfa()
	{
		try
        {
			$class = C . 'Controller';
			$action = A;
            if(class_exists($class))
            {
                $obj= new $class();
                if (method_exists($obj, $action))
                {
                    $obj->$action();
                }
                else {
                    //当链接不存在,自动跳转到错误页
                    header("location.href='index.php?C=Login&a=login'");
                }
            }
            else
            {
                throw new Exception("当前访问无效");
            }

		}
		catch(Exception $e)
		{
            print_r($e->getMessage());
			//header("location.href='index.php?C=Login&a=login'");
		}
	}
static function dump($arr){echo '<pre>';print_r($arr);echo '</pre>';}//自定义输出一个数组的方法


}


 ?>
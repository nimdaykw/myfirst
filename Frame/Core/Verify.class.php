<?php
class Verify
{
	public function verify()
	{
		//基于现有的图像生成ttf验证码
		$filename=IMAGES_PATH."code.png";
		$image=imagecreatefrompng($filename);

		$text=$this->getcode_str();
		//设置session
		$_SESSION['code']=$text;
		//--------------------
		$size=25;//文字大小
		$angle=0;//旋转角度
		$x=20;//text出现的x坐标
		$y=22;//text出现的y坐标
		$color=imagecolorallocate($image,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
		if(1||isalpha)
		{
			//是否为添加水印  imagecolorallocatealpha()
			$color=imagecolorallocatealpha($image,mt_rand(0,255),mt_rand(0,255),mt_rand(0,255),0);
		}
		$fontfile=FONTS_PATH.'gangbi.ttf';//设置字体文件
		imagettftext($image, $size, $angle, $x, $y, $color, $fontfile, $text);

		//输出图像
		header("content-type:image/png");
		imagepng($image);

		//销毁图像
		imagedestroy($image);
	}
	//获取生成的随机字符吗
	public function getcode_str($isNum=true)
	{
		$arr=array();
		if($isNum)
		{
			$arr=range(1,9);
		}
		else
		{
			$arr=array_merge(range(1,9),range('a','z'));
		}
		shuffle($arr);
		$arr_keys=array_rand($arr,4);//随机取出5的
		$str_code="";
		foreach ($arr_keys as $v) {
			$str_code.=$arr[$v];
		}
		return $str_code;
	}
}
?>
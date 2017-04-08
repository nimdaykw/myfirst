<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/2/28
 * Time: 09:26
 */

header('content-type:text/html;charset=utf-8');
include_once('./Frame/Core/Upload.class.php');

//$upload=new Upload();
//$upload->up_test();
//$str=$_POST['pic___'];
echo json_encode($_FILES);

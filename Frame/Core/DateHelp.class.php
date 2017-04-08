<?php
class DateHelp
{
//int mktime (
//            [ int $hour = date("H")
//            [, int $minute = date("i")
//            [, int $second = date("s")
//            [, int $month = date("n")
//            [, int $day = date("j")
//            [, int $year = date("Y")
//            [, int $is_dst = -1 ]]]]]]] )
    public $h;//小时
    public $i;//分钟
    public $s;//秒
    public $d;//天
    public $m;//月
    public $y;//年

    public function __construct()
    {

    }
    public function res_Str_Data()
    {
        //2012-12-12  2012/12/12
        $str="2012-12-12";
        $arr=explode($str,'-');
    }

}



?>
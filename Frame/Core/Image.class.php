<?php

class Image{
    //$dat要加水印图片的图片路径
    //$water水印图片的路径
    //$position 水印图片的位置 9表示右下角,1表示左上角
    /**
     * @param $dst
     * @param $water
     * @param int $position
     */
    public static function water($dst, $water, $position=9)
    {
        //获取要加水印图片的信息
        $dst_info=getimagesize($dst);
//        要加水印的图片,可能是jpg,png gif
        //打开图片
        $dstCreatefun=str_replace('/','createfrom',$dst_info['mime']);
       // $dst_im = $dstCreatefun($dst);

        $water_info=getimagesize($water);
        $waterCreatefun=str_replace('/','createfrom',$water_info['mime']);
        //$water_im=$waterCreatefun();
    }
}


?>
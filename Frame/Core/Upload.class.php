<?php
    class Upload
    {
        private $info=array();//用来存放上传文件的信息
        private $error='';//用来记录错误信息
        public $size=6;//允许上传文件的大小,单位是M
        public $exts=array('jpg','png','jpeg','gif');
        public $rootPath='./Public/Uploads';
        //name
        //type
        //tmp_name
        //error
        //size
        //先获取上传文件的信息,才能上传
        public function __construct()
        {
            //将上传文件信息存入info
            foreach($_FILES as  $val) {
                $this->info = $val;
            }
        }
        //测试方法,上传文件时是否有错误

        public  function up_test()
        {

            //判断是否有错误
            if(!$this->error()||!$this->checkSize()||!$this->checkExt()) {
               return false; //不提示错误,由实例化对象去调用判断// exit($this->error);//将错误提示出来
            }

            //move_uploaded_file(临时文件路径名,要存放的文件位置名)

            $filename=$this->setPath().$this->setfileName();

            if(!move_uploaded_file($this->info['tmp_name'],$filename))
            {
                return false;
            }
            return $filename;

          //  文件上传成功返回存放路径及文件名,上传失败exit(上传类)
        }
        //设置上传文件目录
        public function setPath()
        {
            $subPath=date('Y-m-d').'/';
            $path=rtrim($this->rootPath,'/').'/'.$subPath;
            if(!file_exists($path))
            {
                mkdir($path,0777,true);
            }
            return $path;
        }
        //设置新的文件名
        public function setfileName()
        {
            return time().mt_rand(0000,9999).'.jpg';
        }
        //判断文件后缀
        public function checkExt()
        {
            $ext=$this->getExt();
            if(!in_array($ext,$this->exts))
            {
                return false;
            }
            return true;
        }
        //获取文件后缀
        public function getExt()
        {
            //返回的 jpg png gif rar zip docx小写的后缀名
            $s=strtolower(ltrim(strrchr($this->info['name'],'.'),'.'));
           return $s;
        }
        //判断文件大小
        public function checkSize()
        {
             if($this->info['size']>$this->size * 1024 * 1024)
             {
                 $this->error='上传文件过大';
                 return false;
             }
            return true;
        }


        //上传文件的错误信息处理
        public function error()
        {
            $err=array(
                1=>'超过php.ini中 upload_max_filesize的值',
                2=>'超过html表单中 max_file_size选项指定的值',
                3=>'文件只有部分上传',
                4=>'文件没有被上传',
                6=>'找不到临时文件夹',
                7=>'文件写入失败',
            );
            //判断$_FILES里得error的值是否是$err数组的键值
            if(array_key_exists($this->info['error'],$err))
            {
                $this->error=$err[$this->info['error']];
                return false;
            }
            return true;
            //1超过phpini配置中2超过表单3部分被上传4没有文件被上传 6找不到临时文件夹7文件写入失败
        }
    }

?>
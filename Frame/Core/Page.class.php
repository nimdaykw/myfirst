<?php
final class Page
{

	public static $style=0;//0,1,2分页模块的样式为以后扩展分页模板样式定义的
	//该参数为以后扩展分页模板定义
	private static $pagemodel=0;

	//分页模式0上一页 首页  1,2,3,4,5,6,7  尾页 下一页
	private static $pagemodel_offset=6;//分页模式只有model为0的时候,这个偏移量才能被使用
	private static $page='page';//get传值需要获取的参数名
	private static $selectClass='current';//分页类的css样式class='classname1,classname2'
	//有多少条数据
	private $records;
    //每页显示多少条记录
    private  $pagesize=1;
	//一共多少页码
	private $pagecount;
	//当前页
	private $pageindex;
	//当前页面的地址
	private $href;
	//设置是否显示首页和尾页 默认显示
	private $isfirst=true;
	//设置是否显示中间的页码
	private $ismiddle=true;
    //设置是否自带样式
    private $isstyle=true;
	private $isinfo=true;
	private $template;//可以设置成html
    //设置是否更换标签名
    public $reptext=array(
        'first'=>'首页',//首页的text
        'up'=>'上一页',//上一页的text
        'next'=>'下一页',//下一页的text
        'last'=>'尾页',//尾页的text
        'cur_tagname'=>'span',//选中的页码标签
        'link_tag_name'=>'a',//页码的标签
        'isstyle'=>true,//是否显示自带样式
        'style_name'=>'default',//是否显示自带样式必须为true,这个参数才生效
        'isfirst'=>true,//是否显示首页尾页
        'ismiddle'=>true,//是否显示中间的数字页码
		'isinfo'=>true,
		'template'=>'mvc'
        );
	//公开的私有函数
	/**
	 * [__construct description]
	 * @param [array] $arrPage=array('records'=>多少条记录,'pageindex'=>当前页,'href'=>应用到哪个页面);[description]
	 */
	public function __construct($arrPage,array $config=array())
	{
        $this->pagesize=$arrPage['pagesize'];
		$this->records=$arrPage['records'];
		$this->pageindex=$arrPage['pageindex'];

		$this->href=$arrPage['href'];
		$this->pagecount=ceil($this->records/$this->pagesize);//设置多少页码,通过记录/每页显示多少

		$this->checkPageIndex();//检查pageindex是否超出范围;

        $this->reptext=array_merge( $this->reptext,$config);
        $this->isstyle=$this->reptext['isstyle'];
        $this->isfirst=$this->reptext['isfirst'];
        $this->ismiddle=$this->reptext['ismiddle'];
		$this->template=$this->reptext['template'];
	}
	//检查pageindex的值是否合法
	private function checkPageIndex()
	{
		if($this->pageindex>$this->pagecount||$this->pageindex<1)
		{
			echo '<script>history.go(-1);</script>';
		}
	}
	//加载分页模块
	public  function loadPages()
	{
        $str="";
        //是否自带css样式
        $this->isstyle?$str.=$this->getStyle($this->reptext['style_name'])."<div class=\"pagelist\">":$str.='';
		//// //测试
		$this->isinfo?$str.=$this->getInfo():$str.='';
		$this->isfirst?$str.=$this->gofirst():$str.='';//首页
	 	$str.=$this->upPage();//上一页
	 	$this->ismiddle?$str.=$this->middlePages():$str.='';//中间的页码
        $str.=$this->nextPage();//下一页
	 	$this->isfirst?$str.=$this->golast():$str.='';//尾页
        $this->isstyle?$str.='</div>':$str.='';

	 	return $str;

	}
	//显示当前页,共有多少条数据S
	private function getInfo()
	{
		$str='<span style="margin-right: 5px;">共'.$this->records.'条记录</span>';
		$str.="当前第<span style='color:red'>{$this->pageindex}</span>页&nbsp;共<span>{$this->pagecount}</span>页";
		return $str;
	}
	//首页
	private function gofirst()
	{
		if($this->pageindex>1){
			//$str="<a href=\"{$this->href}?".self::$page."=1\">首页</a>";
			switch($this->template)
			{
//				参考路径  /list/1/1.html
				case 'html':
					$str='<'.$this->reptext["link_tag_name"].' href="'.$this->href.'1.html">'.$this->reptext["first"].'</'.$this->reptext["link_tag_name"].'>';
					return $str;
				default:
					$str='<'.$this->reptext["link_tag_name"].' href="?'.self::$page.'=1&'.$this->href.'">'.$this->reptext["first"].'</'.$this->reptext["link_tag_name"].'>';
					return $str;
			}

		}
	}
	//尾页
	private function golast()
	{
		if($this->pageindex<$this->pagecount)
		{
			//$this->pageindex=$this->pagecount;
			$pageindex=$this->pagecount;

			switch($this->template)
			{
//				参考路径  /list/1/1.html
				case 'html':
					$str='<'.$this->reptext["link_tag_name"].' href="'.$this->href.$pageindex.'.html">'.$this->reptext["last"].'</'.$this->reptext["link_tag_name"].'>';
					return $str;
				default:
					//$str="<a href=\"{$this->href}?".self::$page."={$this->pageindex}\">尾页</a>";
					$str='<'.$this->reptext["link_tag_name"].' href="?'.self::$page.'='.$pageindex.'&'.$this->href.'">'.$this->reptext["last"].'</'.$this->reptext["link_tag_name"].'>';
					return $str;
			}

		}
	}
	//上一页
	private function upPage()
	{
		if($this->pageindex>1)
		{
			$index=$this->pageindex-1;

			switch($this->template) {
				//参考路径  /list/1/1.html
				case 'html':
					$str='<'.$this->reptext["link_tag_name"].' href="'.$this->href.$index.'.html">'.$this->reptext["up"].'</'.$this->reptext["link_tag_name"].'>';
					return $str;
				default:
					//$str="<a href=\"{$this->href}?".self::$page."={$index}\">上一页</a>";
					$str='<'.$this->reptext["link_tag_name"].' href="?'.self::$page.'='.$index.'&'.$this->href.'">'.$this->reptext["up"].'</'.$this->reptext["link_tag_name"].'>';
					return $str;
			}

		}
	}
	//下一页
	private function nextPage()
	{
		if($this->pageindex<$this->pagecount)
		{
			$index=$this->pageindex+1;
			switch($this->template) {
				//参考路径  /list/1/1.html
				case 'html':
					$str='<'.$this->reptext["link_tag_name"].' href="'.$this->href.$index.'.html">'.$this->reptext['next'].'</'.$this->reptext["link_tag_name"].'>';
					return $str;
				default:
					//$str="<a href=\"{$this->href}?".self::$page."={$index}\">下一页</a>";
					$str='<'.$this->reptext["link_tag_name"].' href="?'.self::$page.'='.$index.'&'.$this->href.'">'.$this->reptext['next'].'</'.$this->reptext["link_tag_name"].'>';
					return $str;
			}

		}
	}
	//中间的页码
	private function middlePages()
	{

		$str='';
		$arrmodel=$this->setPageModel();
		/*echo '<pre>';
		print_r($arrmodel);
		echo '</pre>';*/
		//echo  "<script>alert(".$arrmodel["start"]."|".$arrmodel['end'].")</script>";
		for($i=$arrmodel['start'];$i<=$arrmodel['end'];$i++) {
			if ($this->pageindex == $i)
				$str .= "<{$this->reptext['cur_tagname']} class='" . self::$selectClass . "'>$i</{$this->reptext['cur_tagname']}>";
			else {
				switch ($this->template) {
					//参考路径  /list/1/1.html
					case 'html':
						$str .= '<' . $this->reptext["link_tag_name"] . ' href="'.$this->href .$i.'.html">' . $i .'</' . $this->reptext["link_tag_name"] . '>';
						break;
					default:
						$str .= '<' . $this->reptext["link_tag_name"] . ' href="?' . self::$page . '=' . $i . '&' . $this->href . '">' . $i . '</' . $this->reptext["link_tag_name"] . '>';
					//$str.="<a href=\"{$this->href}?".self::$page."={$i}\">$i</a>";
				}

			}
		}
		return $str;
	}
	//设置分页模式
	private function setPageModel()
	{

		//当前分页模式
		//self::$pagemodel_offset
		//echo ('<script>alert("'.$this->pageindex.$this->pagecount.$this->records.'")</script>');
		if ($this->pagecount< self::$pagemodel_offset)
		{
			return array('start'=>1,'end'=>$this->pagecount);
		}

		//$offset=floor(self::$pagemodel_offset/2);
		$offset=floor(self::$pagemodel_offset/2);//3
		$start= $this->pageindex-$offset+1;//1-3+1
		$end =$this->pageindex+$offset;//10 1+3
		if($start<$offset)//6<4
		{
				$start=1;
                $end=self::$pagemodel_offset;//结束
		}
		if($end>$this->pagecount)
		{
			$end=$this->pagecount;
			$start=$this->pagecount-(self::$pagemodel_offset-1);
		}
	/*	if($this->pageindex==1)
		{
			$start=1;
			$end=self::$pagemodel_offset;//结束
		}*/

		return array('start'=>$start,'end'=>$end);
	}
    //获取分页样式
	private function getStyle($stylename)
	{
        switch($stylename)
        {
            case 'default':
                $str='<style>';
                $str.=".pagelist{height:50px;line-height:50px;text-align:center;}";
                $str.=".pagelist a{padding:6px 10px; margin:0px 1px; border:1px solid #e8e8e8;}";
                $str.=".pagelist a:link,.pagelist a:visited{ text-decoration: none; color:#000; }";
                $str.=".pagelist a:hover{background-color:#555;color:white;font-weight:bold;border:none;}";
                $str.=".pagelist .current{background-color:#555;color:white;font-weight:bold;padding:6px 10px;border:1px solid #e8e8e8;}";
                $str.='</style>';
                return $str;
            case 'heihong':
                $this->reptext['cur_tagname']='b';
                $heihong= <<<heihong
<style>
        .pagelist {margin: 20px 0;overflow: hidden;text-align: center;width: 100%;}
        .pagelist a b {color: #999;}
        .pagelist > b, .pagelist a {border-radius: 50%;display: inline-block;height: 26px;line-height: 26px;margin: 0 2px;text-align: center;width: 26px;}
        .pagelist a {border-radius: 50%;display: inline-block;height: 26px;line-height: 26px;margin: 0 2px;text-align: center;width: 26px;}
        .pagelist > b, .pagelist a:hover {background: #333 none repeat scroll 0 0;color: #fff;}
        .pagelist a {border: 1px solid #999;color: #f33;}
</style>
heihong;
                return $heihong;

        }
		//设置分页模块的css样式
	}
}
//www.qdldq.com
//www.wordgo.cn
	// //三私一公
	// //私有的静态属性
	// private static $obj=NULL;
	// //私有的构造方法
	// private function __construct()
	// {

	// }
	// //私有的克隆方法
	// private function __clone(){}
	// //公有的
	// //获取Instance实例的方法
	// public function getInstance()
	// {
	// 	if(!self::$obj instanceof self)
	// 		self::$obj = new self;
	// 	return self::$obj;
	// }
 ?>
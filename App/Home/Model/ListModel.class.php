<?php
class ListModel extends Model
{

    //获取一条文章信息
    public function getArtInfo($id)
    {
        //内连接分类表来查,获取到name(分类名称)
        $sql ="select name,articleid,cid,ctime,title,content,author,ptime,utime,hits,keyword,description,alias,pic ";
        $sql.="from article inner join category on cid=categoryid where articleid=$id";
        return $this->find($sql);
    }
    public function getArtlist($cid)
    {
        $sql ="select name,articleid,cid,ctime,title,content,author,ptime,utime,hits,keyword,description,alias,pic ";
        $sql.="from article inner join category on cid=categoryid ";
        if($cid!=0)
        {
            $sql.=" where cid=$cid or cid in (select categoryid from category where pid=$cid) ";
        }
        $sql.=" order by articleid desc";
        return $this->select($sql);
        //显示列表
        //需求,当有从类别中进入的该页面,查询该分类下以及他子分类的文章
        //直接进来,只需要查询当前分类下的文章
    }
    public function getCategoryNamebyArtCid($cid)
    {
        $sql="select c1.name,c2.name as pname,c1.categoryid,c1.pid from category c1 left join category c2 on c1.pid=c2.categoryid where c1.categoryid=$cid";
        return $this->find($sql);

    }
    //分类的站点地图
    public function getCategorySiteMap($cid)
    {
        static $arr=array();
        $class=$this->getCategoryNamebyArtCid($cid);
        $arr[]=$class;
        if($class['pid']!=0)
        {
            $this->getCategorySiteMap($class['pid']);
        }
        return array_reverse($arr);

    }
    public $sitemap=array();
    public function _getSiteMap($cid)
    {

        $class = $this->getCategoryNamebyArtCid($cid);
        $this->sitemap[] = $class;
        if ($class['pid'] != 0) {
            $this->_getSiteMap($class['pid']);
        }
        return array_reverse($this->sitemap);

    }
    public function getSiteMap($cid)
    {
       $arrs=$this->getCategorySiteMap($cid);
        return $arrs;
    }
}

?>
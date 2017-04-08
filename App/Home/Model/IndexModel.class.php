<?php
class IndexModel extends Model
{
    //获取按点击数最高的前5条
    public function getFiveArticleByhits()
    {
        $sql ="select name,articleid,cid,ctime,title,content,author,ptime,utime,hits,keyword,description,alias,pic ";
        $sql.="from article inner join category on cid=categoryid order by hits desc limit 5";
        return  $this->select($sql);
    }
}


?>
<?php
class ArticleModel extends Model
{
    public function getArticleCount($where='')
    {
        $sql ="select count(*) from article inner join category on cid=categoryid ";
        if($where)
        {
            $sql.=' where '.$where;
        }

        return  $this->count($sql);
    }
    public function getArticle($where='',$limit='')
    {
        $sql ="select name,articleid,cid,ctime,title,content,author,ptime,utime,hits,keyword,description,alias,pic ";
        $sql.="from article inner join category on cid=categoryid ";
        if($where)
        {
            $sql.=' where '.$where;
        }
        $sql.=" order by articleid desc ";
        if($limit)
        {
            $sql.=" $limit";
        }
        //echo $sql;die;
        return  $this->select($sql);
    }
    public function getArticleOne($id)
    {
        $sql ="select articleid,cid,ctime,title,content,author,ptime,utime,hits,keyword,description,alias,pic ";
        $sql.="from article where  articleid=$id";
        return $this->find($sql);
    }
    public function insertArticle()
    {
        $params=array();
        //给数组加上ctime
        //$params['utime']=$time;//第一次添加不处理吧
        $params[':ctime']=time();//创建时间,该字段不提供被修改

        foreach($_POST as $k => $v)
        {
            $params[':'.$k]=$v;
        }
        $upload=new Upload();
        $pic=$upload->up_test();
        if($pic!==false)
        {
            $params[':pic']=$pic;
        }
        else
        {
            return false;
        }


       // echo '<pre>';print_r($params);echo'</pre>';die;
        //添加一条数据
        $sql = ' insert into article(cid,ctime,title,content,author,ptime,hits,keyword,description,alias,pic)';
        $sql .= ' values(:cid,:ctime,:title,:content,:author,:ptime,:hits,:keyword,:description,:alias,:pic)';
        return $this->insert($sql, $params);
    }
    public function delArticle($id)
    {
        $sql="delete from article where articleid=$id";
        return $this->delete($sql);
    }
    public function delMoreArticle(array $ids)
    {
        $ids=implode(',',$ids);
        $sql="delete from article where articleid in ($ids)";
        return $this->delete($sql);

    }
    public function updateArticle()
    {
        //sql语句
        $sql="update article set cid=:cid,utime=:utime,ptime=:ptime,title=:title,content=:content,author=:author,hits=:hits,keyword=:keyword,description=:description,alias=:alias,pic=:pic ";
        $sql.="where articleid=:id";

        $params=array();
        $upload=new Upload();
        $pic=$upload->up_test();

        foreach($_POST as $k => $v)
        {
            $params[':'.$k]=$v;
        }


        $pic!==false?$params[':pic']=$pic:$params[':pic']=$_POST['pic_src'];


        $params[':utime']=time();
        //var_dump($params);die;
        unset($params[':pic_src']);//pic_src只是为了判断该条信息是否有值,以及上传失败后维持数据
        unset($params[':urlcid']);//urlcid只是我在控制器判断是否更改了分类而设置的,在这就必须删除
        //var_dump($params);die;
        //echo '<pre>';print_r($params);echo'</pre>';die;
        return $this->sava($sql,$params);
    }

    //获取上一篇和下一篇
    public function getArticleUpAndDown($id)
    {
        $arr=array();
        $sqlup="select articleid,title from article where  articleid <$id  order by articleid desc  limit 1 ";
        $sqldown="select articleid,title from article where  articleid >$id  order by articleid  desc limit 1 ";
        return array('up'=>$this->find($sqlup),'down'=>$this->find($sqldown));
    }
    //获取按点击数最高的前$limit条
    public function getArticleByhits($limit)
    {
        $sql ="select articleid,title,cid from article inner join category on cid=categoryid order by hits desc limit $limit";
        return  $this->select($sql);
    }
}
?>
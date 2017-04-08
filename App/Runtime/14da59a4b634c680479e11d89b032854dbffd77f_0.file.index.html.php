<?php
/* Smarty version 3.1.30, created on 2017-03-07 19:08:30
  from "D:\WAMP\WWW\blog\App\Admin\View\Article\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be94ae76b101_94597861',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14da59a4b634c680479e11d89b032854dbffd77f' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Admin\\View\\Article\\index.html',
      1 => 1488884894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/frame_left.html' => 1,
  ),
),false)) {
function content_58be94ae76b101_94597861 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_myreplace')) require_once 'D:\\WAMP\\WWW\\blog\\Frame\\Smarty\\plugins\\modifier.myreplace.php';
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>
common.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSS']->value;?>
main.css"/>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JS']->value;?>
libs/modernizr.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JS']->value;?>
jquery-3.1.1.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 >
        $(function(){
            $("#nowtime").css({color:'red'});
            window.setInterval('ShowTime()',1000);
        });
        function ShowTime(){
            var t = new Date();
            var str = t.getFullYear() + '年';
            str += t.getMonth() + '月';
            str += t.getDate() + '日 ';
            str += t.getHours() + ':';
            str += t.getMinutes() + ':';
            str += t.getSeconds() + '';
            $("#nowtime").html(str);
        }
        //全选
       function checkAll(obj,name)
       {
           $("[name='"+name+"']").each(function() {
               obj.checked?this.checked=true:this.checked=false;
           })
       }
        $(function(){
            $('#batchDel').click(function(){
                var num=0;
               $('form input[type="checkbox"]').each(function(){
                     if(this.checked&&this.id!='allck')
                         num++;
               })
                num>0?(confirm('即将删除'+num+'条信息')?$('#myform').submit():
                 $('form input[type="checkbox"]').each(function(){
                     this.checked=false;
                 })
                ):alert('请选中您需要删除的信息');
            })

})
function sethtmlAll()
{
    var imgstr="<img src='./Public/Admin/images/wait.gif'/>";
    setmsg(imgstr,false);
    $.ajax({
        url:'?a=cshtml&c=Article',
        type:'post',
        datatype:'json',
        success:function(res)
        {
            if(res)
            {
                setmsg('已完成静态页面的生成',true,true);
            }
            else
            {
                setmsg('系统错误',true,true);
            }
        }

    })
}
        function sethtmlone(aid)
        {
            var imgstr="<img src='./Public/Admin/images/wait.gif'/>";
            setmsg(imgstr,false);
            $.ajax({
                url:'?a=cshtmlone&c=Article',
                type:"post",
                dataType:'json',
                data:{id:aid},
                success:function(res)
                {
                    if(res)
                    {
                        setmsg('已完成静态页面的生成',true,true);
                    }
                    else
                    {
                        setmsg('系统错误',true,true);
                    }
                }

            })
        }
function setmsg(msg,isclosebtn,isreset){
            var second=300;//默认.show(300),让有个动画效果
            if(isreset)
            {
                second=0;//最快速显示
                $('#msgdiv').remove();
            }
            if($("#msgdiv").attr('id')!="msgdiv")
            {
                var msgbox='<div id="msgdiv" style="display:none; background:#f2f2f2; border:1px solid #ccc;width:300px;height:180px;text-align:center;position:fixed;left:35%;top:30%;">';
                if(isclosebtn){
                    //关闭div begin.....
                    msgbox+='<span id="closediv" onmouseover=this.style.background="#CCC" onmouseout=this.style.background="" style="width:60px;height:25px; ';
                    msgbox+='border-left:1px solid #ccc;border-bottom: 1px solid #ccc; float:right; cursor: pointer;">关闭</span>';
                    //关闭div end.....
                }
                //显示内容 begin......
                msgbox+='<span style="display: block;margin-top: 60px;height:50px;line-height: 55px; border-top:0px solid #ccc;border-bottom:0px solid #ccc;">'
                msgbox+=msg;
                msgbox+='</span>';
                //显示内容 end....
                msgbox+='</div>';
                $("body").append(msgbox);

                $('#msgdiv').show(second);//增加点动画效果
                $("#closediv").click(function(){
                    $('#msgdiv').remove();
                })
            }
        }
    <?php echo '</script'; ?>
>
    
</head>
<body>


<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="index.html">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">

    
    <!--左侧菜单栏 begin-->
    <?php $_smarty_tpl->_subTemplateRender("file:../Public/frame_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--左侧菜单栏 begin-->
    
    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">博文管理</span>
            </div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="" method="get">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td>
                                <input class="common-text" placeholder="关键字" name="keyword" value="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
" id="" type="text">
                                <input value="Article" name="c" type="hidden">
                                <input value="index" name="a" type="hidden">
                                <input value="Admin" name="m" type="hidden">
                                <?php if ($_smarty_tpl->tpl_vars['cid']->value != '') {?>
                                <input value="<?php echo $_GET['cid'];?>
" name="cid" type="hidden">
                                <?php }?>
                            </td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">

                <div class="result-title">
                    <div class="result-list">

                        <a href="?a=add&c=Article&<?php echo $_smarty_tpl->tpl_vars['strcid']->value;?>
">
                            <i class="icon-font"></i>添加文章</a>
                        <a id="batchDel"  href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <input onclick="sethtmlAll()" class="btn btn-primary btn2" name="sethtml" value="全部生成静态页面" type="button">

                    </div>
                </div>
                <div class="result-content">
                    <form name="myform" id="myform" action="?c=Article&a=delMoreHandle" method="post">
                        <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
"/>
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%">
                                <input onclick="checkAll(this,'id[]')" id="allck" class="allChoose" name="" type="checkbox">
                            </th>
                            <th>编号</th>
                            <th>标题</th>
                            <th>所属分类</th>
                            <th>是否有封面</th>
                            <th>作者</th>
                            <th>发布时间</th>
                            <th>点击数</th>
                            <th>操作</th>

                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <tr>

                            <td class="tc">
                                <input name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
" type="checkbox">
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
</td>
                            <td >
                                <a href="./Article/<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
.html" target="_blank">
                                    <?php if ($_smarty_tpl->tpl_vars['keyword']->value != '') {?>
                                        <?php echo smarty_modifier_myreplace($_smarty_tpl->tpl_vars['value']->value['title'],$_smarty_tpl->tpl_vars['keyword']->value,"<span style='color:red'>".((string)$_smarty_tpl->tpl_vars['keyword']->value)."</span>");?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>

                                    <?php }?>

                                </a>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
                            <td>
                                <?php if (!empty($_smarty_tpl->tpl_vars['value']->value['pic'])) {?>
                                YES
                                <?php } else { ?>
                                <font color="red">NO</font>
                                <?php }?>
                            </td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['keyword']->value != '') {?>
                                <?php echo smarty_modifier_myreplace($_smarty_tpl->tpl_vars['value']->value['author'],$_smarty_tpl->tpl_vars['keyword']->value,"<span style='color:red'>".((string)$_smarty_tpl->tpl_vars['keyword']->value)."</span>");?>

                                <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>

                                <?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['ptime'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['value']->value['hits'];?>
</td>
                            <td>
                                <a class="link-update" href="?c=Article&a=update&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">修改</a>
                                <a class="link-del" onclick="return confirm('确定删除吗?')" href="?c=Article&a=delHandle&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
&cid=<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">删除</a>
                                <a class="link-update" onclick="sethtmlone(<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
)" href="javascript:void(0)">生成静态页面</a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                       </table>
                    </form>
                    <div class="list-page"> 2 条 1/1 页</div>
                    <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}

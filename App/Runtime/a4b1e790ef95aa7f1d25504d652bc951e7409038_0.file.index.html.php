<?php
/* Smarty version 3.1.30, created on 2017-03-08 15:06:09
  from "D:\WAMP\WWW\blog\App\Admin\View\Category\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfad615d40c4_39011218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4b1e790ef95aa7f1d25504d652bc951e7409038' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Admin\\View\\Category\\index.html',
      1 => 1488956767,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/frame_left.html' => 1,
  ),
),false)) {
function content_58bfad615d40c4_39011218 (Smarty_Internal_Template $_smarty_tpl) {
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

        //-------------------ajax-------------------------
        function alldel()
        {
            if(confirm('确认删除吗'))
            {
                alert('删完了');
            }
            else
            {
                return false;
            }
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
        //------------------------------------------------
        //写一个调用ajax删除,并能调用admin权限强行删除
        //单个删除url,type,action
        function admin(obj)
        {
            if(!confirm('确定删除吗?'))
            {
                return false;
            }
            //action='ajaxdelHandle';
            var cid=$(obj).attr('ajaxid');
            $.ajax({
                url:'?c=Category&a=ajaxdelHandle',
                type:'get',
                datatype:'json',
                data:{id:cid},
                success:function(result){
                    if(result=='false')
                    {
                        if(confirm('\t\t由于内容受到保护\r\n当前是否使用超级管理员命令强制删除?'))
                        {
                            //选择是则创建一个提示框,然后再ajax调用
                            var msg="<input id='adminkey' type='password' />";
                            msg+="<input onclick='ckTrueAjax("+cid+",true,true)' type='button' value='验证'/>";
                            setmsg(msg,true,true);//显示输入超级管理员密码提示框
                        }
                    }
                    else
                    {

                        var arr=JSON.parse(result);
                        for(var i=0;i<arr.length;i++)
                        {
                            $('[ajaxid="'+arr[i]+'"]').parent().parent().remove();
                        }
                        //已删除
                        $('[ajaxid="'+cid+'"]').parent().parent().remove();
                    }
                }

            })
        }
        function ckTrueAjax(cid,isbreak,isckadmin)
        {

            $.ajax({
                url:'?c=Category&a=ajaxdelHandle',
                type:'get',
                datatype:'json',
                data:{id:cid,isbreak:true,isckadmin:true,adminkey:$('#adminkey').val()},
                success:function(results){
                    if(results!='false')
                    {
                        var msg='认真负责的程序猿,已经为您完成当前操作指令';
                        setmsg(msg,true,true);
                       //alert(results);
                        var arr=JSON.parse(results);
                        $('[ajaxid="'+cid+'"]').parent().parent().remove();
                        for(var i=0;i<arr.length;i++)
                        {
                            $('[ajaxid="'+arr[i]+'"]').parent().parent().remove();
                        }

                        //直接执行删除完成,提示删除成功
                    }
                    else{
                        //验证密码不通过
                        //提示个密码不通过
                        var msg='没超权限密码,凑什么热闹';
                        setmsg(msg,true,true);

                    }

                }

            })
        }
        function sethtmlAll()
        {
            var imgstr="<img src='./Public/Admin/images/wait.gif'/>";
            setmsg(imgstr,false);
            $.ajax({
                url:'?c=Category&a=ajax_set_class_html_all',
                type:'post',
                datatype:'json',
                success:function(res)
                {
                    if(res)
                    {
                        setmsg('已完成所有分类静态页面的生成',true,true);
                    }
                    else
                    {
                        setmsg('系统错误',true,true);
                    }
                }

            })
        }
        function sethtmlone(cid)
        {
            var imgstr="<img src='./Public/Admin/images/wait.gif'/>";
            setmsg(imgstr,false);
            $.ajax({
                url:'?a=ajax_set_class_html_one&c=Category',
                type:"post",
                dataType:'json',
                data:{cid:cid},
                success:function(res)
                {
                    if(res)
                    {
                        setmsg('已完成当前分类静态页面的生成',true,true);
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
    <!--左侧菜单栏-->
    <?php $_smarty_tpl->_subTemplateRender("file:../Public/frame_left.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <!--左侧菜单栏 end-->
    
    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="#">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">分类管理</span>
            </div>
        </div>

        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="?p=back&c=Category&a=add"><i class="icon-font"></i>添加分类</a>

                        <!--<a onclick="alldel()" id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>-->

                        <!--<a href="?c=Category&a=csclasshtml"><i class="icon-font"></i></a>-->
                        <input onclick="sethtmlAll()" class="btn btn-primary btn2" name="sethtml" value="生成所有分类静态文件" type="button">

                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab"  width="100%">
                        <tr>
                            <!--<th class="tc" width="5%">-->
                                <!--<input class="allChoose" name="" type="checkbox">-->
                            <!--</th>-->
                            <th>ID</th>
                            <th>分类名称</th>
                            <th>所属文章总数</th>
                            <th>所属分类</th>
                            <th>操作</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                        <tr>
                            <!--<td class="tc">-->
                                <!--<input name="id[]" value="1" type="checkbox">-->
                            <!--</td>-->
                            <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['value']->value['categoryid'];?>
</td>
                            <td style="width:160px; padding-left: <?php echo $_smarty_tpl->tpl_vars['value']->value['lev']*30;?>
px" >
                                <?php if ($_smarty_tpl->tpl_vars['value']->value['artcount'] != 0) {?>
                                <a href="./List/<?php echo $_smarty_tpl->tpl_vars['value']->value['categoryid'];?>
/1.html" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>
                                <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>

                                <?php }?>
                            </td>
                            <td style="text-align: center ;width:90px"><?php echo $_smarty_tpl->tpl_vars['value']->value['artcount'];?>
</td>
                            <td style="text-align: center"><?php if ($_smarty_tpl->tpl_vars['value']->value['pname'] != '') {
echo $_smarty_tpl->tpl_vars['value']->value['pname'];
} else { ?><span style="color:red">顶级分类</span><?php }?></td>
                            <td>
                                <a class="link-update" href="?c=Category&a=update&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['categoryid'];?>
">修改</a>|
                                <!--<a class="link-del" ajaxid="<?php echo $_smarty_tpl->tpl_vars['value']->value['categoryid'];?>
" href="?c=Category&a=delHandle&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['categoryid'];?>
">删除</a>-->
                                <a class="link-del" onclick="admin(this)" ajaxid="<?php echo $_smarty_tpl->tpl_vars['value']->value['categoryid'];?>
" href="javascript:void(0)">删除</a>|
                                <?php if ($_smarty_tpl->tpl_vars['value']->value['artcount'] != 0) {?>
                                <a class="link" href="?a=index&c=Article&cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['categoryid'];?>
">文章管理</a>|
                                <?php }?>
                                <a  onclick="sethtmlone(<?php echo $_smarty_tpl->tpl_vars['value']->value['categoryid'];?>
)" class="link" href="javascript:void(0)">生成当前分类列表静态页面</a>
                            </td>
                        </tr>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-03-05 19:44:33
  from "D:\WAMP\WWW\blog\App\Admin\View\Article\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bbfa21752087_83546668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28526633ffff1977d36f9dc63118f86a7e9ffca4' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Admin\\View\\Article\\add.html',
      1 => 1488714154,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/frame_left.html' => 1,
  ),
),false)) {
function content_58bbfa21752087_83546668 (Smarty_Internal_Template $_smarty_tpl) {
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JS']->value;?>
laydate/laydate.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo _CK_PATH;?>
ckeditor.js"><?php echo '</script'; ?>
>
    <!--上传图片直接显示-->
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo _PLUGINS;?>
uploadPreview/uploadPreview.js"><?php echo '</script'; ?>
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

    <!--左侧菜单栏 end-->
    
    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">博文管理</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">添加博文</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">

                <form enctype="multipart/form-data" action="?c=Article&a=addHandle" method="post" id="myform" >

                <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>所属分类：</th>
                                <td>
                                   <select name="cid">
                                       <option value="0">请选择</option>
                                       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'val', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
?>
                                       <option <?php if ($_smarty_tpl->tpl_vars['cid']->value == $_smarty_tpl->tpl_vars['val']->value['categoryid']) {?> selected="selected" <?php }?> style="padding-left:<?php echo $_smarty_tpl->tpl_vars['val']->value['lev']*15;?>
px" value='<?php echo $_smarty_tpl->tpl_vars['val']->value['categoryid'];?>
'><?php echo $_smarty_tpl->tpl_vars['val']->value['name'];?>
</option>
                                       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>发布时间：</th>
                                <td>
                                    <input  id="pub" placeholder="请输入日期"  class="common-text required laydate-icon" name="ptime" size="25" value="">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>作者：</th>
                                <td>
                                    <input class="common-text required" name="author" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>浏览量(点击数)：</th>
                                <td>
                                    <input class="common-text required" name="hits" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>别名：</th>
                                <td>
                                    <input class="common-text required" name="alias" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>关键字：</th>
                                <td>
                                    <input class="common-text required" name="keyword" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>描述：</th>
                                <td>
                                    <input class="common-text required" name="description" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>上传封面图：</th>
                                <td style="position: relative">
                                    <img id="imgpic"  style="width:400px;height:240px;position:absolute ; right:40px;top:-220px; ">
                                    <input id="pic" class="common-text required" name="pic" size="50" value="" type="file">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>内容：</th>
                                <td>
                                    <textarea id="con" name="content" class="common-textarea" cols="100" rows="20"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
<!--ckeditor富文本框编辑器-->
<?php echo '<script'; ?>
>
    CKEDITOR.replace('con',{
        //绑定ckeditor的配置文件,所有设置都可以在配置文件设置
        customConfig:'custom.js'
    });
<?php echo '</script'; ?>
>
<!--ckeditor富文本框编辑器 end-->
<!--日历控件开始  要放在你绑定id的后面-->
<?php echo '<script'; ?>
>
    ;!function(){
        laydate.skin('dahong')
        laydate({
            elem: '#pub'
        })
    }();
<?php echo '</script'; ?>
>
<!--日历控件结束 -->
<!--上传图片实时预览begin-->
<?php echo '<script'; ?>
>
    $(function(){
        new uploadPreview({ UpBtn: "pic", DivShow: "divpic", ImgShow: "imgpic" });
    })
<?php echo '</script'; ?>
>
<!--上传图片实时预览end-->
</html><?php }
}

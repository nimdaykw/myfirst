<?php
/* Smarty version 3.1.30, created on 2017-03-06 17:33:31
  from "D:\WAMP\WWW\blog\App\Admin\View\Article\html.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bd2ceb84ab30_22776220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52e38c4e325888a31806d0ee8cd9ca28d2d2339b' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Admin\\View\\Article\\html.html',
      1 => 1488792698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/frame_left.html' => 1,
  ),
),false)) {
function content_58bd2ceb84ab30_22776220 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理-修改文章信息</title>
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
>

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

    <!--左侧菜单栏 end-->

    <!--右侧主操作区-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i>
                <a href="?p=back">首页</a>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">博文管理</span>
                <span class="crumb-step">&gt;</span>
                <span class="crumb-name">生成文章的静态页面</span>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <input type="button" value="生成所有文章的静态页面"/>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>

</html>
<?php }
}

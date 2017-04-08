<?php
/* Smarty version 3.1.30, created on 2017-03-08 16:17:08
  from "D:\WAMP\WWW\blog\App\Home\View\Index\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfbe04b3b7e5_24015315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dd2db0b82dd8edfe177841930f948f9c6ab9471' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Home\\View\\Index\\header.html',
      1 => 1488961011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bfbe04b3b7e5_24015315 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="#"></a></div>
    <nav id="topnav">
        <?php if ($_smarty_tpl->tpl_vars['rightarr']->value) {?>
            <a href="#">首页</a>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rightarr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['v']->value['pid'] == 0) {?>
                <a href="/List/<?php echo $_smarty_tpl->tpl_vars['v']->value['categoryid'];?>
/1.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php } else { ?>
        <a href="#">首页</a>
        <a href="javascript:void(0)">关于我</a>
        <a href="javascript:void(0)">我记忆中的</a>
        <a href="javascript:void(0)">技术分享</a>
        <a href="javascript:void(0)">技术资源</a>
        <?php }?>

    </nav>
</header><?php }
}

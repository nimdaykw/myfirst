<?php
/* Smarty version 3.1.30, created on 2017-03-08 09:49:21
  from "D:\WAMP\WWW\blog\App\Home\View\Public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bf6321860e54_42205083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8dc8433c666a8d4f57ad38438d10fdf4c63be8a' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Home\\View\\Public\\header.html',
      1 => 1488937757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bf6321860e54_42205083 (Smarty_Internal_Template $_smarty_tpl) {
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
                <a href="../<?php echo $_smarty_tpl->tpl_vars['v']->value['categoryid'];?>
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

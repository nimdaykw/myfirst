<?php
/* Smarty version 3.1.30, created on 2017-03-08 16:15:39
  from "D:\WAMP\WWW\blog\App\Home\View\Public\header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfbdabe10ce3_93613559',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bcca912ebd759f2f1db9ce5292abdd026410404' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Home\\View\\Public\\header.html',
      1 => 1488960919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bfbdabe10ce3_93613559 (Smarty_Internal_Template $_smarty_tpl) {
?>
<header>
    <h1>如影随形</h1>
    <h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>
    <div class="logo"><a href="#"></a></div>
    <nav id="topnav">
        <?php if ($_smarty_tpl->tpl_vars['rightarr']->value) {?>
            <a href="../../Home/index.html">首页</a>
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

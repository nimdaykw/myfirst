<?php
/* Smarty version 3.1.30, created on 2017-03-07 09:49:17
  from "D:\WAMP\WWW\blog\App\Admin\View\Public\frame_left.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be119d6c40e9_82947303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cb50909fb3ec03b126f84b06ca06246dda1229c' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Admin\\View\\Public\\frame_left.html',
      1 => 1488791900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be119d6c40e9_82947303 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--左侧菜单栏 begin-->
<div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                <ul class="sub-menu">
                    <li><a href="?c=Category&a=index"><i class="icon-font">&#xe008;</i>分类管理</a></li>
                    <li><a href="?a=index&c=Article"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                    <li><a href="#"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                    <li><a href="#"><i class="icon-font">&#xe052;</i>推荐文章</a></li>
                    <li><a href="#"><i class="icon-font">&#xe052;</i>用户管理</a></li>
                    <li><a href="?a=index&c=Article"><i class="icon-font">&#xe052;</i>文章后审核</a></li>
                    <li><a href="?a=tohtml&c=Article"><i class="icon-font">&#xe052;</i>生成静态html</a></li>
                    <!--文章后审核主要是针对封面图片和文章内容进行审核,对不满足的文章进行屏蔽处理-->
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                <ul class="sub-menu">
                    <li><a href="#"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                    <li><a href="#"><i class="icon-font">&#xe046;</i>数据备份</a></li>
                    <li><a href="#"><i class="icon-font">&#xe045;</i>数据还原</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!--左侧菜单栏 begin--><?php }
}

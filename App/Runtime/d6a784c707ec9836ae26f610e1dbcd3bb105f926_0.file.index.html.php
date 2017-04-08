<?php
/* Smarty version 3.1.30, created on 2017-03-08 11:30:34
  from "D:\WAMP\WWW\blog\App\Home\View\Index\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bf7ada5d8d28_64547350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6a784c707ec9836ae26f610e1dbcd3bb105f926' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Home\\View\\Index\\index.html',
      1 => 1488943832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Index/header.html' => 1,
  ),
),false)) {
function content_58bf7ada5d8d28_64547350 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\WAMP\\WWW\\blog\\Frame\\Smarty\\plugins\\modifier.truncate.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
<link href="../.<?php echo _CSS_PATH;?>
base.css" rel="stylesheet">
<link href="../.<?php echo _CSS_PATH;?>
index.css" rel="stylesheet">
<link href="../.<?php echo _CSS_PATH;?>
media.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="../.<?php echo _JS_PATH;?>
modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>
<div class="ibody">
  <!--<header>-->
    <!--<h1>如影随形</h1>-->
    <!--<h2>影子是一个会撒谎的精灵，它在虚空中流浪和等待被发现之间;在存在与不存在之间....</h2>-->
    <!--<div class="logo"><a href="/"></a></div>-->
    <!--<nav id="topnav"><a href="index.html">首页</a><a href="about.html">关于我</a><a href="newlist.html">慢生活</a><a href="share.html">模板分享</a><a href="new.html">模板主题</a></nav>-->
  <!--</header>-->
  <?php $_smarty_tpl->_subTemplateRender("file:../Index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <article>
    <div class="banner">
      <ul class="texts">
        <p>The best life is use of willing attitude, a happy-go-lucky life. </p>
        <p>最好的生活是用心甘情愿的态度，过随遇而安的生活。</p>
      </ul>
    </div>
    <div class="bloglist">
      <h2>
        <p><span>推荐</span>文章</p>
      </h2>
      <!--推荐文章列表 begin-->
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
      <div class="blogs">
        <h3><a href="../Article/<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h3>
        <figure><img style="width:173px;height:116px" src="../.<?php echo $_smarty_tpl->tpl_vars['value']->value['pic'];?>
" ></figure>
        <ul>
          <p><?php echo $_smarty_tpl->tpl_vars['value']->value['description'];?>
</p>
          <a href="../Article/<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
.html" target="_blank" class="readmore">阅读全文&gt;&gt;</a>
        </ul>
        <p class="autor">
          <span>作者：<?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</span>
          <span>分类：【<a href="../List/<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
/1.html"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>】</span>
          <span>浏览（<a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value['hits'];?>
</a>）</span>
          <span>评论（<a href="#">30</a>）</span></p>
        <div class="dateview"><?php echo $_smarty_tpl->tpl_vars['value']->value['ptime'];?>
</div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <!--推荐文章列表 end-->
    </div>
  </article>
  <aside>
    <div class="avatar"><a href="about.html"><span>关于我</span></a></div>
    <div class="topspaceinfo">
      <h1>执子之手，与子偕老</h1>
      <p>于千万人之中，我遇见了我所遇见的人....</p>
    </div>
    <div class="about_c">
      <p>网名：DanceSmile | 即步非烟</p>
      <p>职业：Web前端设计师、网页设计 </p>
      <p>籍贯：四川省—成都市</p>
      <p>电话：13662012345</p>
      <p>邮箱：dancesmiling@qq.com</p>
    </div>
    <div class="bdsharebuttonbox"><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_more" data-cmd="more"></a></div>
    <div class="tj_news">
      <h2>
        <p class="tj_t1">最新文章</p>
      </h2>
      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['newdata']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>

        <li><a href="../Article/<?php echo $_smarty_tpl->tpl_vars['v']->value['articleid'];?>
.html"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['v']->value['title'],15);?>
</a></li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <!--<li><a href="/">两只蜗牛艰难又浪漫的一吻</a></li>-->
        <!--<li><a href="/">春暖花开-走走停停-发现美</a></li>-->
        <!--<li><a href="/">琰智国际-Nativ for Life官方网站</a></li>-->
        <!--<li><a href="/">个人博客模板（2014草根寻梦）</a></li>-->
        <!--<li><a href="/">简单手工纸玫瑰</a></li>-->
        <!--<li><a href="/">响应式个人博客模板（蓝色清新）</a></li>-->
        <!--<li><a href="/">蓝色政府（卫生计划生育局）网站</a></li>-->
      </ul>
      <h2>
        <p class="tj_t2">推荐文章</p>
      </h2>
      <ul>
        <li><a href="/">犯错了怎么办？</a></li>
        <li><a href="/">两只蜗牛艰难又浪漫的一吻</a></li>
        <li><a href="/">春暖花开-走走停停-发现美</a></li>
        <li><a href="/">琰智国际-Nativ for Life官方网站</a></li>
        <li><a href="/">个人博客模板（2014草根寻梦）</a></li>
        <li><a href="/">简单手工纸玫瑰</a></li>
        <li><a href="/">响应式个人博客模板（蓝色清新）</a></li>
        <li><a href="/">蓝色政府（卫生计划生育局）网站</a></li>
      </ul>
    </div>
    <div class="links">
      <h2>
        <p>友情链接</p>
      </h2>
      <ul>
        <li><a href="/">W3C</a></li>
        <li><a href="/">3DST技术社区</a></li>
      </ul>
    </div>
    <div class="copyright">
      <ul>
        <p> Design by <a href="/">DanceSmile</a></p>
        <p>蜀ICP备11002373号-1</p>
        </p>
      </ul>
    </div>
  </aside>
  <?php echo '<script'; ?>
 src="js/silder.js"><?php echo '</script'; ?>
>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }
}

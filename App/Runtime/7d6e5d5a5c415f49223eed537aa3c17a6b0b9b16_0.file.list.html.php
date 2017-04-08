<?php
/* Smarty version 3.1.30, created on 2017-03-03 21:37:42
  from "D:\WAMP\WWW\blog\App\Home\View\List\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b971a6c471e5_12764233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d6e5d5a5c415f49223eed537aa3c17a6b0b9b16' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Home\\View\\List\\list.html',
      1 => 1488548259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
  ),
),false)) {
function content_58b971a6c471e5_12764233 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\WAMP\\WWW\\blog\\Frame\\Smarty\\plugins\\modifier.truncate.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>黑色Html5响应式个人博客模板——主题《如影随形》</title>
<meta name="keywords" content="个人博客模板,博客模板,响应式" />
<meta name="description" content="如影随形主题的个人博客模板，神秘、俏皮。" />
  <link href="<?php echo _CSS_PATH;?>
base.css" rel="stylesheet">
  <link href="<?php echo _CSS_PATH;?>
style.css" rel="stylesheet">
  <link href="<?php echo _CSS_PATH;?>
media.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="<?php echo _JS_PATH;?>
modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
</head>
<body>
<div class="ibody">
  <?php $_smarty_tpl->_subTemplateRender("file:../Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <article>
    <h2 class="about_h">您现在的位置是： <a href="/">首页</a>>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
      <?php ob_start();
echo $_GET['cid'];
$_prefixVariable1=ob_get_clean();
if ($_smarty_tpl->tpl_vars['v']->value['categoryid'] != $_prefixVariable1) {?>
          <a href="?m=Home&a=index&c=List&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['categoryid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>>
      <?php } else { ?>
          <a style="color:red" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
      <?php }?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </h2>
    <div class="bloglist">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
      <div class="newblog">
        <ul>
          <h3><a href="?m=Home&a=info&c=List&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h3>
          <div class="autor">
            <span>作者：<?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</span>
            <span>分类：[<a href="?m=Home&a=index&c=List&cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>]</span>
            <span>浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['value']->value['hits'];?>
</a>）</span>
            <span>评论（<a href="/">30</a>）</span>
          </div>
          <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value['description'],10);?>
...<a href="?m=Home&a=info&c=List&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
" target="_blank" class="readmore">全文</a></p>
        </ul>
        <figure><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value['pic'];?>
" ></figure>
        <div class="dateview"><?php echo $_smarty_tpl->tpl_vars['value']->value['ptime'];?>
</div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
    <div class="page"><a title="Total record"><b>113</b></a><b>1</b><a href="/">2</a><a href="/">3</a><a href="/">4</a><a href="/">5</a><a href="/">&gt;</a><a href="/">&gt;&gt;</a></div>
  </article>
  <aside>
    <div class="rnav">
      <li class="rnav1 "><a href="/">日记</a></li>
      <li class="rnav2 "><a href="/">欣赏</a></li>
      <li class="rnav3 "><a href="/">程序人生</a></li>
      <li class="rnav4 "><a href="/">经典语录</a></li>
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
        <li><span class="num1">1</span><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><span class="num2">2</span><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><span class="num3">3</span><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><span>4</span><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><span>5</span><a href="/">女生清新个人博客网站模板</a></li>
        <li><span>6</span><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><span>7</span><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><span>8</span><a href="/">时间煮雨-个人网站模板</a></li>
        <li><span>9</span><a href="/">花气袭人是酒香—个人网站模板</a></li>
      </ul>
      <h2>
        <p>栏目推荐</p>
      </h2>
      <ul>
        <li><a href="/">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><a href="/">励志人生-要做一个潇洒的女人</a></li>
        <li><a href="/">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><a href="/">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><a href="/">女生清新个人博客网站模板</a></li>
        <li><a href="/">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><a href="/">Column 三栏布局 个人网站模板</a></li>
        <li><a href="/">时间煮雨-个人网站模板</a></li>
        <li><a href="/">花气袭人是酒香—个人网站模板</a></li>
      </ul>
      <h2>
        <p>最新评论</p>
      </h2>
      <ul class="pl_n">
        <dl>
          <dt><img src="<?php echo _IMAGES_PATH;?>
s8.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo _IMAGES_PATH;?>
s7.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo _IMAGES_PATH;?>
s6.jpg"> </dt>
          <dt> </dt>
          <dd>小林博客
            <time>8月7日</time>
          </dd>
          <dd><a href="/">博客色彩丰富，很是好看</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo _IMAGES_PATH;?>
003.jpg"> </dt>
          <dt> </dt>
          <dd>DanceSmile
            <time>49分钟前</time>
          </dd>
          <dd><a href="/">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</a></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo _IMAGES_PATH;?>
002.jpg"> </dt>
          <dt> </dt>
          <dd>yisa
            <time>2小时前</time>
          </dd>
          <dd><a href="/">我手机里面也有这样一个号码存在</a></dd>
        </dl>
      </ul>
      <h2>
        <p>最近访客</p>
        <ul>
          <img src="<?php echo _IMAGES_PATH;?>
vis.jpg"><!-- 直接使用“多说”插件的调用代码 -->
        </ul>
      </h2>
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
 src="<?php echo _JS_PATH;?>
silder.js"><?php echo '</script'; ?>
>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }
}

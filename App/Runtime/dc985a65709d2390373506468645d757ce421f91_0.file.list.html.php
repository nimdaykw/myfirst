<?php
/* Smarty version 3.1.30, created on 2017-03-08 14:12:57
  from "D:\WAMP\WWW\blog\App\Admin\View\Article\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bfa0e9461da3_93961296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc985a65709d2390373506468645d757ce421f91' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Admin\\View\\Article\\list.html',
      1 => 1488945424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../Home/View/Public/header.html' => 1,
  ),
),false)) {
function content_58bfa0e9461da3_93961296 (Smarty_Internal_Template $_smarty_tpl) {
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
style.css" rel="stylesheet">
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
  <?php $_smarty_tpl->_subTemplateRender("file:../../../Home/View/Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <article>
    <h2 class="about_h">您现在的位置是： <a href="../../Home/index.html">首页</a>>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class']->value, 'v', true, 'k');
$_smarty_tpl->tpl_vars['v']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->iteration++;
$_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration == $_smarty_tpl->tpl_vars['v']->total;
$__foreach_v_0_saved = $_smarty_tpl->tpl_vars['v'];
?>
          <?php if ($_smarty_tpl->tpl_vars['v']->last) {?>
          <a style="color:red" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
            <?php } else { ?>
                <a href="../<?php echo $_smarty_tpl->tpl_vars['v']->value['categoryid'];?>
/1.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>>
          <?php }?>
      <?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </h2>
    <?php if ($_smarty_tpl->tpl_vars['data']->value != null) {?>
    <div class="bloglist">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
      <div class="newblog">
        <ul>
          <h3><a href="../../Article/<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h3>
          <div class="autor">
            <span>作者：<?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</span>
            <span>分类：[<a href="../<?php echo $_smarty_tpl->tpl_vars['value']->value['cid'];?>
/1.html"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a>]</span>
            <span>浏览（<a href="/"><?php echo $_smarty_tpl->tpl_vars['value']->value['hits'];?>
</a>）</span>
            <span>评论（<a href="/">30</a>）</span>
          </div>
          <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value['description'],10);?>
...<a href="../../Article/<?php echo $_smarty_tpl->tpl_vars['value']->value['articleid'];?>
.html" target="_blank" class="readmore">全文</a></p>
        </ul>
        <?php if ($_smarty_tpl->tpl_vars['value']->value['pic'] != '') {?>
        <figure>
          <img src="../../<?php echo $_smarty_tpl->tpl_vars['value']->value['pic'];?>
" >
        </figure>
        <?php }?>
        <div class="dateview"><?php echo $_smarty_tpl->tpl_vars['value']->value['ptime'];?>
</div>
      </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </div>
      <?php } else { ?>
        <div align="center" style="height:250px;border-bottom:1px solid #ccc;font-size: 16px;">
          <h2>当前分类下无文章</h2>
          <!--<img src="../.<?php echo _IMAGES_PATH;?>
1.gif" width="100px" height="60px">-->
        </div>
      <?php }?>


    <div class="page">
      <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

    </div>
  </article>
  <aside>
    <div class="rnav">
      <!--取出4个分类-->
      <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (0) : 0-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step)),4);
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
      <li class="rnav<?php echo $_smarty_tpl->tpl_vars['foo']->value+1;?>
 "><a href="../<?php echo $_smarty_tpl->tpl_vars['rightarr']->value[$_smarty_tpl->tpl_vars['foo']->value]['categoryid'];?>
/1.html"><?php echo $_smarty_tpl->tpl_vars['rightarr']->value[$_smarty_tpl->tpl_vars['foo']->value]['name'];?>
</a></li>
      <?php }
}
?>

      <!--<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rightarr']->value, 'v', true, 'k');
$_smarty_tpl->tpl_vars['v']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->iteration++;
$_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration == $_smarty_tpl->tpl_vars['v']->total;
$__foreach_v_2_saved = $_smarty_tpl->tpl_vars['v'];
?>-->
      <!--<li class="rnav1 "><a href="../List/<?php echo $_smarty_tpl->tpl_vars['v']->value['categoryid'];?>
/1.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a></li>-->
      <!--<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
-->
    </div>
    <div class="ph_news">
      <h2>
        <p>点击排行</p>
      </h2>
      <ul class="ph_n">
        <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 8+1 - (0) : 0-(8)+1)/abs($_smarty_tpl->tpl_vars['foo']->step)),9);
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
        <li><span class="num<?php echo $_smarty_tpl->tpl_vars['foo']->value+1;?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value+1;?>
</span><a href="../Article/<?php echo $_smarty_tpl->tpl_vars['hits']->value[$_smarty_tpl->tpl_vars['foo']->value]['articleid'];?>
.html"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['hits']->value[$_smarty_tpl->tpl_vars['foo']->value]['title'],15);?>
</a></li>
        <?php }
}
?>

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
 src=".<?php echo _JS_PATH;?>
silder.js"><?php echo '</script'; ?>
>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }
}

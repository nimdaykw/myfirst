<?php
/* Smarty version 3.1.30, created on 2017-03-03 21:55:18
  from "D:\WAMP\WWW\blog\App\Home\View\List\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b975c69c70a1_98138773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51c0451e5ec3e7970bf0db1c3651d82b8165a73d' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Home\\View\\List\\info.html',
      1 => 1488549315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../Public/header.html' => 1,
  ),
),false)) {
function content_58b975c69c70a1_98138773 (Smarty_Internal_Template $_smarty_tpl) {
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
      <a href="?m=Home&a=index&c=List&cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['categoryid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      <span style="color:red"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title'],13);?>
</span>
    </h2>
    <div class="index_about">
      <h2 class="c_titile"><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</h2>
      <p class="box_c"><span class="d_time">发布时间：<?php echo $_smarty_tpl->tpl_vars['row']->value['ptime'];?>
</span>
        <span>分类：<a href="?m=Home&a=index&c=List&cid=<?php echo $_smarty_tpl->tpl_vars['row']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></span>
        <span>浏览（<?php echo $_smarty_tpl->tpl_vars['row']->value['hits'];?>
）</span><span>评论览（14）</span></p>
      <ul class="infos">
        <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

      </ul>
      <div class="keybq">
        <p><span>关键字词</span>：黑色,个人博客,时间轴,响应式</p>
      </div>
      <div class="nextinfo">
        <p>上一篇：<a href="/news/s/2013-09-04/606.html">程序员应该如何高效的工作学习</a></p>
        <p>下一篇：<a href="/news/s/2013-10-21/616.html">柴米油盐的生活才是真实</a></p>
      </div>
      <!--评论 start-->
            <div class="pinglun">
                <h2>精彩评论</h2>
                <ul>
                    <li>
                        <img src="<?php echo _IMAGES_PATH;?>
50.jpg">
                        <div class="parea">
                            <div class="sender">王大拿</div>
                            <p class="pcontent">吃好喝好玩好</p>
                            <div>
                                <span>2016-11-11</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="<?php echo _IMAGES_PATH;?>
s7.jpg">
                        <div class="parea">
                            <div class="sender">谢大脚</div>
                            <p class="pcontent">休息好睡好</p>
                            <div>
                                <span>2016-11-13</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <form action="?c=Art&a=addComment" method="post">
                    <textarea name="content"></textarea>
                    <input type="submit" value="发表">
                </form>
            </div>
            <!--评论 end-->
      <div class="otherlink">
        <h2>相关文章</h2>
        <ul>
          <li><a href="/news/s/2013-07-25/524.html" title="现在，我相信爱情！">现在，我相信爱情！</a></li>
          <li><a href="/newstalk/mood/2013-07-24/518.html" title="我希望我的爱情是这样的">我希望我的爱情是这样的</a></li>
          <li><a href="/newstalk/mood/2013-07-02/335.html" title="有种情谊，不是爱情，也算不得友情">有种情谊，不是爱情，也算不得友情</a></li>
          <li><a href="/newstalk/mood/2013-07-01/329.html" title="世上最美好的爱情">世上最美好的爱情</a></li>
          <li><a href="/news/read/2013-06-11/213.html" title="爱情没有永远，地老天荒也走不完">爱情没有永远，地老天荒也走不完</a></li>
          <li><a href="/news/s/2013-06-06/24.html" title="爱情的背叛者">爱情的背叛者</a></li>
        </ul>
      </div>
    </div>
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
 src="js/silder.js"><?php echo '</script'; ?>
>
  <div class="clear"></div>
  <!-- 清除浮动 --> 
</div>
</body>
</html>
<?php }
}

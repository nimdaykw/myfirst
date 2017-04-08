<?php
/* Smarty version 3.1.30, created on 2017-03-08 13:57:33
  from "D:\WAMP\WWW\blog\App\Admin\View\Category\info.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58bf9d4d3c40e3_42090474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2764b00b8be0e07cd6a2ffd495581b367ba185' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Admin\\View\\Category\\info.html',
      1 => 1488945817,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../../Home/View/Public/header.html' => 1,
  ),
),false)) {
function content_58bf9d4d3c40e3_42090474 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'D:\\WAMP\\WWW\\blog\\Frame\\Smarty\\plugins\\modifier.truncate.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
</title>
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['keyword'];?>
" />
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['row']->value['description'];?>
" />
  <link href=".<?php echo _CSS_PATH;?>
base.css" rel="stylesheet">
  <link href=".<?php echo _CSS_PATH;?>
style.css" rel="stylesheet">
  <link href=".<?php echo _CSS_PATH;?>
media.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
  <!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src=".<?php echo _JS_PATH;?>
modernizr.js"><?php echo '</script'; ?>
>
<![endif]-->
  <link rel="stylesheet" href=".<?php echo _PUBLIC_;?>
highlight/default.css">
  <?php echo '<script'; ?>
 src=".<?php echo _PUBLIC_;?>
highlight/highlight.pack.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
>hljs.initHighlightingOnLoad();<?php echo '</script'; ?>
>
</head>
<body>
<div class="ibody">
  <?php $_smarty_tpl->_subTemplateRender("file:../../../Home/View/Public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

  <article>
    <h2 class="about_h">您现在的位置是： <a href="../Home/index.html">首页</a>>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
      <a href="../List/<?php echo $_smarty_tpl->tpl_vars['v']->value['categoryid'];?>
/1.html"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
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
        <span>分类：<a href="../List/<?php echo $_smarty_tpl->tpl_vars['v']->value['categoryid'];?>
/1.html"><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</a></span>
        <span>浏览（<?php echo $_smarty_tpl->tpl_vars['row']->value['hits'];?>
）</span><span>评论览（14）</span></p>
      <ul class="infos">
        <?php echo $_smarty_tpl->tpl_vars['row']->value['content'];?>

      </ul>
      <div class="keybq">
        <p><span>关键字词</span><?php echo $_smarty_tpl->tpl_vars['row']->value['keyword'];?>
</p>
      </div>
      <div class="nextinfo">
        <p>上一篇：<a href="./<?php echo $_smarty_tpl->tpl_vars['data_updown']->value['up']['articleid'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['data_updown']->value['up']['title'];?>
</a></p>
        <p>下一篇：<a href="./<?php echo $_smarty_tpl->tpl_vars['data_updown']->value['down']['articleid'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['data_updown']->value['down']['title'];?>
</a></p>
      </div>
      <!--评论 start-->
            <div class="pinglun">
                <h2>精彩评论</h2>
                <ul>
                    <li>
                        <!--评论的主体-->
                        <!--用户名的图像-->
                        <img src=".<?php echo _IMAGES_PATH;?>
50.jpg">
                        <div class="parea">
                            <!--回复用户名-->
                            <div class="sender">王大拿</div>
                            <!--回复内容-->
                            <p class="pcontent">吃好喝好玩好</p>
                            <!--回复时间-->
                            <div><span>2016-11-11 12:00:00</span> <a href="#">回复</a></div>
                        </div>
                      <!--评论的主体end-->
                      <!--回复评论的评论-->
                      <ul >
                        <li style="margin-left: 25px;border:none">
                          <!--评论的主体-->
                          <!--用户名的图像-->
                          <img src=".<?php echo _IMAGES_PATH;?>
50.jpg">
                          <div class="parea">
                            <!--回复用户名-->
                            <div class="sender">王大拿</div>
                            <!--回复内容-->
                            <p class="pcontent">吃好喝好玩好</p>
                            <!--回复时间-->
                            <div><span>2016-11-11 12:00:00</span> <a href="#">回复</a></div>
                          </div>
                          <!--评论的主体end-->
                            <!--回复评论的评论-->
                            <ul >
                              <li style="margin-left: 25px;border:none">
                                <!--评论的主体-->
                                <!--用户名的图像-->
                                <img src=".<?php echo _IMAGES_PATH;?>
50.jpg">
                                <div class="parea">
                                  <!--回复用户名-->
                                  <div class="sender">王大拿</div>
                                  <!--回复内容-->
                                  <p class="pcontent">吃好喝好玩好</p>
                                  <!--回复时间-->
                                  <div><span>2016-11-11 12:00:00</span> <a href="#">回复</a></div>
                                </div>
                                <!--评论的主体end-->
                              </li>
                              <li style="margin-left: 25px;border:none">
                                <!--评论的主体-->
                                <!--用户名的图像-->
                                <img src=".<?php echo _IMAGES_PATH;?>
50.jpg">
                                <div class="parea">
                                  <!--回复用户名-->
                                  <div class="sender">王大拿</div>
                                  <!--回复内容-->
                                  <p class="pcontent">吃好喝好玩好</p>
                                  <!--回复时间-->
                                  <div><span>2016-11-11 12:00:00</span> <a href="#">回复</a></div>
                                </div>
                                <!--评论的主体end-->
                              </li>
                            </ul>
                            <!--回复评论的评论-->
                        </li>
                      </ul>
                      <!--回复评论的评论-->
                    </li>
                    <li>
                        <img src=".<?php echo _IMAGES_PATH;?>
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
      <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 3+1 - (0) : 0-(3)+1)/abs($_smarty_tpl->tpl_vars['foo']->step)),4);
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 0, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
      <li class="rnav<?php echo $_smarty_tpl->tpl_vars['foo']->value+1;?>
 "><a href="../List/<?php echo $_smarty_tpl->tpl_vars['rightarr']->value[$_smarty_tpl->tpl_vars['foo']->value]['categoryid'];?>
/1.html"><?php echo $_smarty_tpl->tpl_vars['rightarr']->value[$_smarty_tpl->tpl_vars['foo']->value]['name'];?>
</a></li>
      <?php }
}
?>

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
        <li><a href="#">有一种思念，是淡淡的幸福,一个心情一行文字</a></li>
        <li><a href="#">励志人生-要做一个潇洒的女人</a></li>
        <li><a href="#">女孩都有浪漫的小情怀——浪漫的求婚词</a></li>
        <li><a href="#">Green绿色小清新的夏天-个人博客模板</a></li>
        <li><a href="#">女生清新个人博客网站模板</a></li>
        <li><a href="#">Wedding-婚礼主题、情人节网站模板</a></li>
        <li><a href="#">Column 三栏布局 个人网站模板</a></li>
        <li><a href="#">时间煮雨-个人网站模板</a></li>
        <li><a href="#">花气袭人是酒香—个人网站模板</a></li>
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

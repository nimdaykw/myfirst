<?php
/* Smarty version 3.1.30, created on 2017-03-07 20:49:12
  from "D:\WAMP\WWW\blog\App\Admin\View\Login\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58beac4862d7b0_87033889',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '380a7f97516c8835fb822826661683bb4c982ee6' => 
    array (
      0 => 'D:\\WAMP\\WWW\\blog\\App\\Admin\\View\\Login\\login.html',
      1 => 1488890950,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58beac4862d7b0_87033889 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台登录</title>
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
>
       // setInterval("downtime",1000); function downtime() { $("#sec").val($("#sec").val-1);}
        /**
         * [setmsg jquery自定义提示框]
         * @param  <?php echo array('string');?>
 msg   [需要显示的内容]
         * @param  <?php echo array('bool');?>
 isclosebtn [是否有关闭按钮]
         * @param  <?php echo array('bool');?>
 isreset [是否重置弹出框]
         * @return <?php echo array('type');?>
       [description]
         */
        function setmsg(msg,isclosebtn,isreset){
            var second=300;//默认.show(300),让有个动画效果
            if(isreset)
            {
                second=0;//最快速显示
                $('#msgdiv').remove();
            }
            if($("#msgdiv").attr('id')!="msgdiv")
            {
                var msgbox='<div id="msgdiv" style="display:none; background:#f2f2f2; border:1px solid #ccc;width:300px;height:180px;text-align:center;position:fixed;left:35%;top:30%;">';
                if(isclosebtn){
                //关闭div begin.....
                    msgbox+='<span id="closediv" onmouseover=this.style.background="#CCC" onmouseout=this.style.background="" style="width:60px;height:25px; ';
                    msgbox+='border-left:1px solid #ccc;border-bottom: 1px solid #ccc; float:right; cursor: pointer;">关闭</span>';
                //关闭div end.....
                }
                //显示内容 begin......
                    msgbox+='<span style="display: block;margin-top: 60px;height:50px;line-height: 55px; border-top:0px solid #ccc;border-bottom:0px solid #ccc;">'
                    msgbox+=msg;
                    msgbox+='</span>';
                //显示内容 end....
                    msgbox+='</div>';
                $("body").append(msgbox);

                $('#msgdiv').show(second);//增加点动画效果
                $("#closediv").click(function(){
                    $('#msgdiv').remove();
                })
            }
        }
        function login()
        {

            //alert('dsad');
            //alert($('#myform').serialize());
            $.ajax({
                url: './index.php?C=Login&A=loginHandle&M=Admin',
                type: 'post',
                dataType: 'json',
                data: $('#myform').serialize(),
                success:function($result)
                {
                    //接收返回值
                    if($result['url']!="goback")
                    {
                        setmsg($result['msg'],true,true);
                        window.location.href=$result['url'];
                    }
                    else
                    {
                        //同步调用
                        //异步调用
                        setmsg($result['msg'],true,true);
                    }
                }

            })
            // .done(function() {
            //     console.log("success");
            // })
            // .fail(function() {
            //     console.log("error");
            // })
            // .always(function() {
            //     console.log("complete");
            // });
        }
    <?php echo '</script'; ?>
>






    <style>
        #cc{
            width:350px;
            margin:20px auto;
        }
        td{
            padding:10px 5px;
        }
        #logo{
            display:block;
            margin:150px auto 20px;
        }
        body{
            FILTER: progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#ccc,endColorStr=#fff); /*IE 6 7 8*/ 

background: -ms-linear-gradient(top, #ccc,  #fff);        /* IE 10 */

background:-moz-linear-gradient(top,#ccc,#fff);/*火狐*/ 

background:-webkit-gradient(linear, 0% 0%, 0% 100%,from(#ccc), to(#fff));/*谷歌*/ 

background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#ccc), to(#fff));      /* Safari 4-5, Chrome 1-9*/

background: -webkit-linear-gradient(top, #ccc, #fff);   /*Safari5.1 Chrome 10+*/

background: -o-linear-gradient(top, #ccc, #fff);  /*Opera 11.10+*/

} 
        }

        
    </style>
</head>
<body id="body">



<div class="container clearfix">
    <img src='<?php echo $_smarty_tpl->tpl_vars['IMAGES']->value;?>
logo.png' id='logo' />
    <!--右侧主操作区-->
    <div class="main-wrap" id="cc">
        <div class="result-wrap">
            <div class="result-content">
                <form action="?M=Admin&C=Login&A=loginHandle" method="post" id="myform" >
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th>用户名：</th>
                            <td>
                                <input class="common-text required" id="title" name="user" size="20" value="" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th>密码：</th>
                            <td>
                                <input class="common-text required" name="pwd" size="20" value="" type="password">
                            </td>
                        </tr>
                        <tr>
                            <th>验证码：</th>
                            <td>
                                <input class="common-text required" name="verifycode" size="4" value="" type="text">
                                <img src="?M=Admin&C=Public&A=code" width="80" height="30"
                                 onclick="this.src='?M=Admin&C=Public&A=code&t='+Math.random()">
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <!--<input class="btn btn-primary btn4 mr10" value="登录" type="submit">-->
                                 <input onclick="login()"  class="btn btn-primary btn4 mr10" value="登陆" type="button">
                                <input class="btn btn4" onclick="history.go(-1)" value="返回" type="button">
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>

        </div>

    </div>
    <!--/右侧主操作区-->
</div>

</body>
</html><?php }
}

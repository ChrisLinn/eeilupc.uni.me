<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>中国石油大学(华东)电气创新实验室预约系统</title>
<meta content="" name="keywords">
<meta content="" name="description">
<link href="./index_files/favicon.ico?v=20130411" type="image/x-icon" rel="shortcut icon">
<link href="./index_files/global.css" rel="stylesheet" type="text/css">
<link href="./index_files/module.css" rel="stylesheet" type="text/css">
<link href="./index_files/menu.css" rel="stylesheet" type="text/css">
<link href="./index_files/form.css" rel="stylesheet" type="text/css">
<link href="./index_files/jquery.atwho.css" rel="stylesheet" type="text/css">
<link href="./index_files/login.css" rel="stylesheet" type="text/css"><script>
/**
 * 全局变量
 */
var SITE_URL  = 'http://eeilupc.uni.me';
var THEME_URL = 'http://eeilupc.uni.me/index_files/stv1/_static';
var APPNAME   = 'public';
var MID		  = '0';
var UID		  = '0';
var initNums  =  '140';
var SYS_VERSION = '20130411'
// Js语言变量
var LANG = new Array();
</script>
<script src="./index_files/public_zh-cn.js"></script><script src="./index_files/jquery-1.7.1.min.js"></script>
<script src="./index_files/jquery.form.js"></script>
<script src="./index_files/common.js"></script>
<script src="./index_files/core.js"></script>
<script src="./index_files/core.comment.js"></script>
<script src="./index_files/module.js"></script>
<script src="./index_files/module.common.js"></script>
<script src="./index_files/jwidget_1.0.0.js"></script>
<script src="./index_files/jquery.atwho.js"></script>
<script src="./index_files/jquery.caret.js"></script>
<script src="./index_files/ui.core.js"></script>
<script src="./index_files/ui.draggable.js"></script>
<link href="./index_files/base.css" rel="stylesheet" type="text/css"><link href="./index_files/style.css" rel="stylesheet" type="text/css"></head>
<body>
<div id="login-bg">
<?php
include 'header.php';
if(isset($_COOKIE["id"]))
{
	$userid =$_COOKIE["id"];
	if(con2db()){
	$exec = "SELECT priority FROM user WHERE Id='$userid'";
	$pri =mysql_result(mysql_query($exec),0);
	if($pri==5) {Header("Location:admin.php");}
	else{Header("Location:ask.php");}
	}
}
date_default_timezone_set('Asia/Shanghai');
?>
    <div class="login-b" style="opacity:1;">
        <img id="login_bg" src="./index_files/body-bg2.jpg" style="display: block; width: 1366px; height: auto; margin-left: 0px; opacity: 1; visibility: visible;">
     </div>
     <div id="login-content">
	      <div id="wrap-hd" style="opacity: 1; visibility: visible;">
          <div class="logo" style="background:url(./biltiEEIL_files/logo.png) no-repeat;"></div>
          <div class="login-guide"><p>中国石油大学(华东)<br>电气创新实验室预约系统</p></div>
          <div class="s-login">
                <form id="IndexForm" method="POST" action="login.php">
                <div class="login-bd">
                    <ul class="clearfix" model-node="login_input">
                        <li class="s-row" style="z-index:100">
                          <div class="input">
                             <label class="l-login" style="">学号</label>
                             <div>
                                 <input name="id" type="text" class="s-txt1" autocomplete="off">
                                 <div class="txt-list on-changes" style="z-index: 999; display: none;">
                                   <p>请选择或继续输入...</p>
                                   <ul>
                                      <li email="" rel="show"></li>
                                      <li email="" rel="show"></li>                                    </ul>
                                  </div>
                              </div>
                           </div>
                        </li>
                        <li class="s-row">
                          <div class="input">
                            <label class="l-login" style="">密码</label>
                                                        <input i="" name="password" type="password" class="s-txt1" autocomplete="off">
                                                      </div>
                        </li>
                        <li class="actionBtn"><a href="javascript:;" onclick="$(&#39;#IndexForm&#39;).submit();" class="btn-login">登录</a></li>
                        <li class="s-row1">
                                                    <a onclick="javascript:window.open(&#39;/reg.php&#39;)">注册帐号</a>
                                                  </li>
                        
                    </ul>
                </div>
                </form>
                <div id="js_login_input" style="display:none" class="error-box"></div>
                          </div>         
        </div>
      </div>
      <div id="footer" style="opacity:1;visibility:visible;margin:0;bottom:0;position:absolute;width:100%;height:50px;z-index:-1">
            <div class="footer-wrap" style="left:50%;margin-left:-300px;position:absolute;top:0;width:560px;border:none">        
            </div>
      </div>
</div>
<script src="./index_files/online_check.php"></script><script src="./index_files/login.js" type="text/javascript"></script>
</body>
</html>
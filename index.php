<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>中国石油大学(华东)电气创新实验室预约系统</title>
<meta content="" name="keywords">
<meta content="" name="description">
<link href="./index_files/favicon.ico?v=20130411" type="image/x-icon" rel="shortcut icon">
<link href="./index_files/addons/theme/stv1/_static/css/global.css?v=20130411" rel="stylesheet" type="text/css" />
<link href="./index_files/addons/theme/stv1/_static/css/module.css?v=20130411" rel="stylesheet" type="text/css" />
<link href="./index_files/addons/theme/stv1/_static/css/menu.css?v=20130411" rel="stylesheet" type="text/css" />
<link href="./index_files/addons/theme/stv1/_static/css/form.css?v=20130411" rel="stylesheet" type="text/css" />
<link href="./index_files/addons/theme/stv1/_static/css/jquery.atwho.css?v=20130411" rel="stylesheet" type="text/css" />
<link href="./index_files/apps/public/_static/login.css?v=20130411" rel="stylesheet" type="text/css"/><script>
/**
 * 全局变量
 */
var SITE_URL  = 'http://eeilupc.uni.me';
var THEME_URL = 'http://eeilupc.uni.me/index_files/addons/theme/stv1/_static';
var APPNAME   = 'public';
var MID		  = '0';
var UID		  = '0';
var initNums  =  '140';
var SYS_VERSION = '20130411'
// Js语言变量
var LANG = new Array();
</script>
<script src="./index_files/data/lang/public_zh-cn.js?v=20130411"></script><script src="./index_files/addons/theme/stv1/_static/js/jquery-1.7.1.min.js?v=20130411"></script>
<script src="./index_files/addons/theme/stv1/_static/js/jquery.form.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/common.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/core.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/core.comment.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/module.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/module.common.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/jwidget_1.0.0.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/jquery.atwho.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/jquery.caret.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/ui.core.js"></script>
<script src="./index_files/addons/theme/stv1/_static/js/ui.draggable.js"></script>
<link href="./index_files/addons/plugin/SpaceStyle/html/base.css" rel="stylesheet" type="text/css"><link href="./index_files/addons/plugin/SpaceStyle/themes/gray/style.css" rel="stylesheet" type="text/css"></head>
<body>
<div id="login-bg">
<script type="text/javascript">
        var Sys = {};
        var ua = navigator.userAgent.toLowerCase();
        if (window.ActiveXObject)
            Sys.ie = ua.match(/msie ([\d.]+)/)[1]
        else if (document.getBoxObjectFor)
            Sys.firefox = ua.match(/firefox\/([\d.]+)/)[1]
        else if (window.MessageEvent && !document.getBoxObjectFor)
            Sys.chrome = ua.match(/chrome\/([\d.]+)/)[1]
        else if (window.opera)
            Sys.opera = ua.match(/opera.([\d.]+)/)[1]
        else if (window.openDatabase)
            Sys.safari = ua.match(/version\/([\d.]+)/)[1];
        
        //以下进行测试
        if(Sys.ie == '8.0'||Sys.ie == '9.0'||Sys.ie == '10.0'||Sys.ie == '11.0'||Sys.ie == '12.0'||Sys.firefox||Sys.chrome||Sys.opera||Sys.safari)  ;
		else window.location.href="./simple/index.php";
</script>
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
                                                        <input id="" name="password" type="password" class="s-txt1" autocomplete="off"/>
                                                      </div>
                        </li>
                        <li class="actionBtn"><input value="登录" type="submit" class="btn-login"/></li>
                        <li class="s-row1">
                                                    <a onclick="javascript:window.location.href=&#39;/reg.php&#39;">注册帐号</a>
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
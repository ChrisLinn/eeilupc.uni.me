﻿<!DOCTYPE html>
<html dir="ltr" lang="zh-CN"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>中国石油大学(华东)电气创新实验室预约系统</title>
<link rel="stylesheet" type="text/css" media="all" href="./BenOrSeattle_files/style.css">
<link rel="stylesheet" type="text/css" media="all" href="./BenOrSeattle_files/admin-bar.min.css">
<link href="./index_files/favicon.ico?v=20130411" type="image/x-icon" rel="shortcut icon">
<!--[if lt IE 9]>
<script src="http://eeilupc.duapp.com/wp-content/themes/twentyeleven/js/html5.js" type="text/javascript"></script>
<![endif]-->
<meta name="generator" content="WordPress 3.3.1">
<script type="text/javascript" src="./BenOrSeattle_files/shCore.js"></script><link type="text/css" rel="stylesheet" href="./BenOrSeattle_files/shCoreDefault.css">	<style type="text/css">
.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}.STYLE1 {color: #666666}
</style>
</head>
<body class="home blog single-author two-column right-sidebar">
<div id="page" class="hfeed">
	<header id="branding" role="banner">
	  <hgroup class="entry-title">
	    <p class="entry-title STYLE1">EEIL in UPC Booking Sys </p>
	  </hgroup>

						
									<img src="./BenOrSeattle_files/trolley.jpg" width="1000" height="288" alt="">	  </a>
			
								
			
			<!-- #access -->
	</header>
	<!-- #branding -->


	<div id="main" style="text-align:center; vertical-align:middle; line-height:24px">
		<div id="primary">

			
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						
					</header><!-- .entry-header -->

					<div class="entry-content" >
						<!--------------------------------------------------内容是在这添加么-------------------------------------------------------------------------------------------------------------------------------->
							Welcome~ <?php echo $_COOKIE["id"]; ?>.<br />
<?php include 'header.php'; 
date_default_timezone_set('Asia/Shanghai');
?>
<?php
date_default_timezone_set('Asia/Shanghai');
if(!isset($_COOKIE["id"])) Header("Location:index.php");
$date =$_GET["date"];
if(!isset($date)) Header("Location:index.php");
if(!$date)
{ 
		$ok=0;
		echo "未填入信息！查询失败请返回！<br/>";
	}
elseif(con2db()){
	$day=date('w',strtotime($date)); 
	if($day==0)  $day=7;
	dateask($date,$day);
}
echo "<a href='/answer.php?date=".($date-1)."'>前一天</a>............................................<a href='/answer.php?date=".($date+1)."'>后一天</a>";
?>
<br/><br/>
<form id="do" name="do" action="do.php" method="post">
<select name="book">
<option value="1">增加预约</option>
<option value="0">取消预约</option>
</select>
<input style="width:8%" type="text" name="date"/>(请填入日期，格式如：”20120128“）
<select name="time">
<option value="08:00-10:00">08:00-10:00</option>
<option value="10:00-12:00">10:00-12:00</option>
<option value="14:00-16:00">14:00-16:00</option>
<option value="16:00-18:00">16:00-18:00</option>
<option value="19:00-21:00">19:00-21:00</option>
<option value="21:00-23:00">21:00-23:00</option>
</select>
<input value="选择"  type="submit" />
</form>
</br></br></br>
<div style="position: relative;right: 400px">
 	<a  href="/index.php">返回</a>
</div>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			

		</div><!-- #primary -->

		<!-- #secondary .widget-area -->

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			

			
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">SyntaxHighlighter.all();</script>

<div id="leading" >

		
		<div id="wpadminbar" class="nojq nojs" role="navigation">
		<a class="screen-reader-shortcut" href="http://localhost/wordpress/#wp-toolbar" tabindex="1">跳至工具栏</a>
		<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="顶部导航工具栏。" tabindex="0">
		<ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true"  title="我的帐户">您好，<?php echo $_COOKIE["id"]; ?><img alt="" src="./BenOrSeattle_files/noavatar_small.gif" class="avatar avatar-16 photo" height="16" width="16"></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" ><img alt="" src="./BenOrSeattle_files/noavatar_middle.gif" class="avatar avatar-64 photo" height="64" width="64"><span class="display-name"><?php showmyname() ?>></span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a ><?php showmysta() ?></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item" href="/mybooking.php">我的预约</a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item" href="/reborn.php">修改个人信息</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item" href="/logout.php">注销</a>		</li></ul></div>		</li></ul>			</div>
		</div>
		</div>
</body></html>

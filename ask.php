<!DOCTYPE html>
<html dir="ltr" lang="zh-CN"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>中国石油大学(华东)电气创新实验室预约系统</title>
<link rel="stylesheet" type="text/css" media="all" href="./BenOrSeattle_files/style.css">
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

						<img src="./BenOrSeattle_files/trolley.jpg" width="1000" height="288" alt="">
			
								<form method="get" id="searchform" action="./BenOrSeattle_files/BenOrSeattle.htm">
	</form>
			
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
<?php
include 'header.php';
if(!isset($_COOKIE["id"])) Header("Location:index.php");
date_default_timezone_set('Asia/Shanghai');
?>
<form action="answer.php" method="get">
要查询的日期:<br/>
格式如：“20120128”<br/><input style="width:8%" type="text" name="date" />
<input value="选择" type="submit" />
</form><br/>
普通用户只允许提前两天预约，<br/>
你的身份是：<?php
$userid =$_COOKIE["id"];
if(con2db()){
$exec = "SELECT status FROM user WHERE Id='$userid'";
echo $status =mysql_result(mysql_query($exec),0);
}
?>
<br/><br/><br/>
<a style="position: relative;right: 45px" href="/reborn.php">修改个人信息</a><a style="position: relative;left: 40px" href="/logout.php">注销</a>
<br/>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			

		</div><!-- #primary -->

		<!-- #secondary .widget-area -->

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			

			
	</footer><!-- #colophon -->
</div><!-- #page -->

<script type="text/javascript">SyntaxHighlighter.all();</script>

</body></html>

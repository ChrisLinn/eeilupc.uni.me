<!DOCTYPE html>
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
		echo "未填入信息！查询失败请返回！";
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
<input style="width:5%" type="text" name="date"/>(请填入日期，格式如：”20120128“）
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

</body></html>

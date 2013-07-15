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

						<a href="./BenOrSeattle_files/BenOrSeattle.htm">
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



<div id="leading" >

		
		<div id="wpadminbar" class="nojq nojs" role="navigation">
			<a class="screen-reader-shortcut" href="http://localhost/wordpress/#wp-toolbar" tabindex="1">跳至工具栏</a>
			<div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="顶部导航工具栏。" tabindex="0">
				<ul id="wp-admin-bar-root-default" class="ab-top-menu">
		<li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost/wordpress/wp-admin/about.php" title="关于 WordPress"><span class="ab-icon"></span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu">
		<li id="wp-admin-bar-about"><a class="ab-item" href="http://localhost/wordpress/wp-admin/about.php">关于 WordPress</a>		</li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu">
		<li id="wp-admin-bar-wporg"><a class="ab-item" href="http://cn.wordpress.org/">WordPress.org</a>		</li>
		<li id="wp-admin-bar-documentation"><a class="ab-item" href="http://codex.wordpress.org/zh-cn:Main_Page">文档</a>		</li>
		<li id="wp-admin-bar-support-forums"><a class="ab-item" href="http://zh-cn.forums.wordpress.org/">支持论坛</a>		</li>
		<li id="wp-admin-bar-feedback"><a class="ab-item" href="http://zh-cn.forums.wordpress.org/forum/suggestions">反馈</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost/wordpress/wp-admin/">BenOrSeattle</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu">
		<li id="wp-admin-bar-dashboard"><a class="ab-item" href="http://localhost/wordpress/wp-admin/">仪表盘</a>		</li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu">
		<li id="wp-admin-bar-themes"><a class="ab-item" href="http://localhost/wordpress/wp-admin/themes.php">主题</a>		</li>
		<li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item" href="http://localhost/wordpress/wp-admin/customize.php?url=http%3A%2F%2Flocalhost%2Fwordpress%2F">自定义</a>		</li>
		<li id="wp-admin-bar-widgets"><a class="ab-item" href="http://localhost/wordpress/wp-admin/widgets.php">小工具</a>		</li>
		<li id="wp-admin-bar-menus"><a class="ab-item" href="http://localhost/wordpress/wp-admin/nav-menus.php">菜单</a>		</li>
		<li id="wp-admin-bar-background"><a class="ab-item" href="http://localhost/wordpress/wp-admin/themes.php?page=custom-background">背景</a>		</li>
		<li id="wp-admin-bar-header"><a class="ab-item" href="http://localhost/wordpress/wp-admin/themes.php?page=custom-header">顶部</a>		</li></ul></div>		</li>
		<li id="wp-admin-bar-comments"><a class="ab-item" href="http://localhost/wordpress/wp-admin/edit-comments.php" title="1 条评论待审"><span class="ab-icon"></span><span id="ab-awaiting-mod" class="ab-label awaiting-mod pending-count count-1">1</span></a>		</li>
		<li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost/wordpress/wp-admin/post-new.php" title="添加"><span class="ab-icon"></span><span class="ab-label">新建</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu">
		<li id="wp-admin-bar-new-post"><a class="ab-item" href="http://localhost/wordpress/wp-admin/post-new.php">文章</a>		</li>
		<li id="wp-admin-bar-new-media"><a class="ab-item" href="http://localhost/wordpress/wp-admin/media-new.php">媒体</a>		</li>
		<li id="wp-admin-bar-new-page"><a class="ab-item" href="http://localhost/wordpress/wp-admin/post-new.php?post_type=page">页面</a>		</li>
		<li id="wp-admin-bar-new-user"><a class="ab-item" href="http://localhost/wordpress/wp-admin/user-new.php">用户</a>		</li></ul></div>		</li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu">
		<li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="./BenOrSeattle_files/BenOrSeattle.htm" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150"><input type="submit" class="adminbar-button" value="搜索"></form></div>		</li>
		<li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="http://localhost/wordpress/wp-admin/profile.php" title="我的帐户">您好，lollol<img alt="" src="http://1.gravatar.com/avatar/9687d6bd9ab6d4086051c1cf647fc95f?s=16&d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D16&r=G" class="avatar avatar-16 photo" height="16" width="16"></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu">
		<li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://localhost/wordpress/wp-admin/profile.php"><img alt="" src="http://1.gravatar.com/avatar/9687d6bd9ab6d4086051c1cf647fc95f?s=64&d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D64&r=G" class="avatar avatar-64 photo" height="64" width="64"><span class="display-name">lollol</span></a>		</li>
		<li id="wp-admin-bar-edit-profile"><a class="ab-item" href="http://localhost/wordpress/wp-admin/profile.php">编辑我的个人资料</a>		</li>
		<li id="wp-admin-bar-logout"><a class="ab-item" href="http://localhost/wordpress/wp-login.php?action=logout&_wpnonce=6efb4f2765">登出</a>		</li></ul></div>		</li></ul>			</div>
			<a class="screen-reader-shortcut" href="http://localhost/wordpress/wp-login.php?action=logout&_wpnonce=6efb4f2765">登出</a>
		</div>
		</div>
</body></html>

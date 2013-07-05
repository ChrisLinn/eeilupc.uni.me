<html>
<head>
    <title>中国石油大学（华东）电气创新实验室预约系统</title>
 </head>
<body  style="text-align:center; vertical-align:middle; line-height:24px">
<h1>中国石油大学（华东）电气创新实验室预约系统</h1>
<br/>
<?php
include 'header.php';
if(isset($_COOKIE["id"]))
{
	$userid =$_COOKIE["id"];
	if(con2db()){
	$exec = "SELECT priority FROM user WHERE Id='$userid'";
	$pri =mysql_result(mysql_query($exec),0);
	if($pri==5) {Header("Location:admin.php");}
	else{ echo "q";Header("Location:ask.php");}
	}
}
date_default_timezone_set('Asia/Shanghai');
?>
<form action="login.php" method="post">
学号： <input style="width:8%" type="text" name="id" /><br/>
密码： <input style="width:8%" type="password" name="password"/><br/>
<input value="登录" type="submit" /> <a href="/reg.php">注册</a></form>
</body>
</html>
<html>
<head>
    <title>中国石油大学（华东）电气创新实验室预约系统</title>
 </head>
<body   style="text-align:center; vertical-align:middle; line-height:24px">
<h1>中国石油大学（华东）电气创新实验室预约系统</h1>
<br/>
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
<br/>
<a href="/reborn.php">修改个人信息</a>  <a href="/logout.php">注销</a>
</body>
</html>


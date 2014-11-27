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
$userid =$_COOKIE["id"];
if(con2db()){
$exec = "SELECT priority FROM user WHERE Id='$userid'";
$pri =mysql_result(mysql_query($exec),0);
if($pri!=5) Header("Location:index.php");
}
?>
欢迎管理员～</br>
</br><h4>修改用户身份</h4>
<form action="admin2.php" method="post">
TA的学号：<input style="width:8%" type="text" name="Oid" />
<select name="Opri">
<option value="1">普通用户</option>
<option value="2">创新实验室成员</option>
<option value="5">管理员</option>
</select>
<input value="选择" type="submit" />
</form><br/>
<br/>
<form action="answer.php" method="get">
<h4>要查询的日期:</h4>
格式如：“20120128”<br/><input style="width:8%" type="text" name="date" />
<input value="选择" type="submit" />
</form><br/>
你的身份是：<?php
$exec = "SELECT status FROM user WHERE Id='$userid'";
echo $status =mysql_result(mysql_query($exec),0);
?>
<br/>
<a href="/reborn.php">修改个人信息</a>  <a href="/logout.php">注销</a>
</body>
</html>


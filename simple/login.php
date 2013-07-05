<html>
<head>
    <title>中国石油大学（华东）电气创新实验室预约系统</title>
 </head>
<body   style="text-align:center; vertical-align:middle; line-height:24px">
<h1>中国石油大学（华东）电气创新实验室预约系统</h1>
<?php include 'header.php'; ?>
<?php
if(isset($_COOKIE["id"])) Header("Location:index.php");
$id =$_POST["id"]; 
if(!isset($id)) Header("Location:index.php");
date_default_timezone_set('Asia/Shanghai');
$password =$_POST["password"];

// some code
 if(con2db()){
 $exec = "SELECT * FROM user WHERE Id='$id' ";      //sql语句，查询用户名称！
 $result = mysql_query($exec);
 $rows = mysql_num_rows($result);
 if($rows<=0) echo "用户不存在！";
 else {
 $exec = "SELECT * FROM user WHERE Id='$id' AND password='$password'";
 $result = mysql_query($exec);
 $rows = mysql_num_rows($result);
 if($rows<=0) echo "密码错误！";
 else{
 setcookie("id", "$id", time()+3600);
 Header("Location:index.php"); 
 }
 }
}
?>
<a href="/index.php">返回首页</a>
</body>
</html>



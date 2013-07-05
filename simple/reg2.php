<html>
<head>
    <title>中国石油大学（华东）电气创新实验室预约系统</title>
 </head>
<body   style="text-align:center; vertical-align:middle; line-height:24px">
<h1>中国石油大学（华东）电气创新实验室预约系统</h1> 
<?php include 'header.php'; ?> 
<?php
if(isset($_COOKIE["id"])) Header("Location:index.php");
date_default_timezone_set('Asia/Shanghai');
?>
<?php
$id =$_POST["id"]; 
$username =$_POST["username"]; 
$password =$_POST["password"];
if(!isset($id)||!isset($username)||!isset($password)) 
Header("Location:index.php");
if(!$id||!$username||!$password)
		echo "信息填入不完全！操作失败！";
elseif(con2db()){
 $exec = "SELECT * FROM user WHERE Id='$id'";      //sql语句，查询用户名称！
 $result = mysql_query($exec);
 $rows = mysql_num_rows($result);
 if($rows>0) echo "用户已存在";
 else {
 if($id%100000/1000>=53&&$id%100000/1000<54) {
 mysql_query("INSERT INTO user(Id,password,Name,priority,status) VALUES ( '$id','$password', '$username',1,'普通用户')");
 echo "成功注册！";
 setcookie("id", "$id", time()+3600);
 }else echo "抱歉目前只允许电气专业学生进行注册！";
 }
}
?>
<a href="/index.php">返回</a>
</body>
</html>




<html>
<head>
    <title>中国石油大学（华东）电气创新实验室预约系统</title>
 </head>
<body   style="text-align:center; vertical-align:middle; line-height:24px">
<h1>中国石油大学（华东）电气创新实验室预约系统</h1> 
<?php include 'header.php';
date_default_timezone_set('Asia/Shanghai'); ?> 
Welcome~ <?php echo $_COOKIE["id"]; ?>.<br />
<?php
if(!isset($_COOKIE["id"])) Header("Location:index.php");
$id=$_COOKIE["id"];
//$newid =$_POST["id"]; 
$username =$_POST["username"]; 
$password =$_POST["password"];
if(!isset($id)||!isset($username)||!isset($password)) 
//if(!isset($newid)||!isset($username)||!isset($password)||!isset($code)) 
Header("Location:index.php");
//if(!$newid||!$username||!$password)
if(!$id||!$username||!$password)
		echo "信息填入不完全！操作失败！";
elseif(con2db()){
 $exec = "SELECT * FROM user WHERE Id='$id'";      //sql语句，查询用户名称！
 $result = mysql_query($exec);
 $rows = mysql_num_rows($result);
 if($rows<=0) echo "用户不存在";
 else {
 //mysql_query("UPDATE user SET Id='$newid',Name='$username',priority='$priority',password='$password' WHERE Id='$id'");
 mysql_query("UPDATE user SET Id='$id',Name='$username',password='$password' WHERE Id='$id'");
 echo "成功修改！";
 setcookie("id", "$newid", time()+3600);
 }
}
?>
<a href="/index.php">返回</a>
</body>
</html>

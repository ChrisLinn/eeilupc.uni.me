<html>
<head>
    <title>中国石油大学（华东）电气创新实验室预约系统</title>
 </head>
<body   style="text-align:center; vertical-align:middle; line-height:24px">
<h1>中国石油大学（华东）电气创新实验室预约系统</h1> 
<?php include 'header.php'; ?> 
<?php
if(!isset($_COOKIE["id"])) Header("Location:index.php");
$userid =$_COOKIE["id"];
if(con2db()){
$exec = "SELECT priority FROM user WHERE Id='$userid'";
$pri =mysql_result(mysql_query($exec),0);
if($pri!=5) Header("Location:index.php");
}
date_default_timezone_set('Asia/Shanghai');
?>
<?php
$Oid =$_POST["Oid"]; 
$Opri =$_POST["Opri"];
if(!isset($Oid)||!isset($Opri)) 
Header("Location:index.php");
if(!$Oid||!$Opri)
		echo "信息填入不完全！操作失败！";
else{
$status=array(1=>"普通用户",2=>"创新实验室成员",5=>"管理员");
mysql_query(" UPDATE user SET priority='$Opri',status='$status[$Opri]'  WHERE Id='$Oid' ");
 //mysql_query(" UPDATE user SET priority=1 ,status='$status[1]'  WHERE Id='$Oid' ");
 echo "成功修改！";
 }
?>
<a href="/admin.php">返回</a>
</body>
</html>
<html>
<head>
    <title>中国石油大学（华东）电气创新实验室预约系统</title>
 </head>
<body   style="text-align:center; vertical-align:middle; line-height:24px">
<h1>中国石油大学（华东）电气创新实验室预约系统</h1> 
<?php include 'header.php'; ?> 
Welcome~ <?php echo $_COOKIE["id"]; ?>.<br />
<?php
date_default_timezone_set('Asia/Shanghai');
$book =$_POST["book"]; 
$date =$_POST["date"]; 
$time =$_POST["time"];
$userid =$_COOKIE["id"];
if(!isset($_COOKIE["id"])||!isset($book)||!isset($date)||!isset($time)) 
Header("Location:index.php");
if(!$date)
{ 
		$ok=0;
		echo "信息填入不完全！操作失败！";
	}
elseif(con2db()){
echo $userid;
$exec = "SELECT Name FROM user WHERE Id='$userid'";
$username =mysql_result(mysql_query($exec),0);
$day=date('w',strtotime($date));

if($day==0)  $day=7;
$exec = "SELECT priority FROM user WHERE Id='$userid'";
$pri =mysql_result(mysql_query($exec),0);
$exec = "SELECT status FROM user WHERE Id='$userid'";
$status =mysql_result(mysql_query($exec),0);
echo $username;
if($book) cbook($username,$userid,$date,$day,$time,$pri,$status,date('Ymd'),date('Ymd H:i:s'));
else {
	if($date>=date('Ymd')){
	mysql_query("DELETE FROM desk WHERE username='$username' AND date='$date' AND time='$time'");
	echo "<br/>成功取消！";
	}else echo "请勿取消之前的记录！";
	}
}
?>
<a href="/index.php">返回</a>
</body>
</html>

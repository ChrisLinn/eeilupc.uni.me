<?php
/*
CREATE TABLE desk
(
deskid int,
username char(255),
userid int,
date int,
day  char(255),
time char(255),
tt char(255),
status char(255)
)

CREATE TABLE user
(
Id int,
password char(255),
Name char(255),
priority int,
status char(255)
)


$timearray=array(1=>"08:00-10:00",2=>"10:00-12:00",3=>"14:00-16:00",4=>"16:00-18:00",5=>"19:00-21:00",6=>"21:00-23:00");
$dayarray=array(1=>"一",2=>"二",3=>"三",4=>"四",5=>"五",6=>"六",7=>"日"); 
$seat=18;

book  date time 
*/



date_default_timezone_set('Asia/Shanghai');

function con2db()
{
	//change the IF 
	if(1){
	echo "Don't  know your sql info yet.<br>Tell me in function 'con2db()' ['header.php']<br>";
	}
	else{
	//change1:sqlserver and sql-usernanme sql-password 
	$con = mysql_connect("SQLserver","username","password");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
	//change2: your database
	if(mysql_select_db("database", $con))
	return 1; 
	else return 0;
	}
}

function dateask($date,$day)
{	$timearray=array(1=>"08:00-10:00",2=>"10:00-12:00",3=>"14:00-16:00",4=>"16:00-18:00",5=>"19:00-21:00",6=>"21:00-23:00");
	$dayarray=array(1=>"一",2=>"二",3=>"三",4=>"四",5=>"五",6=>"六",7=>"日"); 
	$seat=18;
	echo $date."星期".$dayarray[$day]."<br/>";
	for($time=1;$time<=6;$time++) {
 	$shijian=$timearray[$time]; 
	$result = mysql_query("SELECT  *  FROM desk WHERE  date='$date' AND time='$shijian' ORDER BY deskid");
	$rows = mysql_num_rows($result);
	if($rows>0) {	
	echo "<br/>". $date."星期".$dayarray[$day] .$shijian."还剩".($seat-$rows)."个位置";
	echo "
		<table border='1' cellpadding=‘10’ align='center' >
		<tr>
		<th>桌号</th> 
		<th>用户</th>
		<th>学号</th> 
		<th>日期</th>
		<th>星期</th>
		<th>时间段</th>
		<th>预约日期</th>
		<th>身份</th>		
		</tr>";
		while($row = mysql_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['deskid'] . "</td>"; 
			echo "<td>" . $row['username'] . "</td>";
			echo "<td>" . $row['userid'] . "</td>"; 
			echo "<td>" . $row['date'] . "</td>";
			echo "<td>" . $row['day'] . "</td>";
			echo "<td>" . $row['time'] . "</td>";
			echo "<td>" . $row['tt'] . "</td>";
			echo "<td>" . $row['status'] . "</td>";
			echo "</tr>";
		  }
		echo "</table>";
		}
		else echo "<br/>". $date."星期".$dayarray[$day] .$shijian."没有人预约<br/>";
	}
	 echo "<br/><br/><br/>";
}

function cbook($username,$userid,$date,$day,$time,$pri,$status,$td,$tt)
{ 	
	$timearray=array(1=>"08:00-10:00",2=>"10:00-12:00",3=>"14:00-16:00",4=>"16:00-18:00",5=>"19:00-21:00",6=>"21:00-23:00");
	$dayarray=array(1=>"一",2=>"二",3=>"三",4=>"四",5=>"五",6=>"六",7=>"日"); 
	$seat=18;
	$result = mysql_query("SELECT *  FROM desk WHERE date='$date' AND time='$time'");
	$deskid = mysql_num_rows($result)+1;
	$ok=1;
	if($deskid>$seat) echo "桌子已满！";
	else{
	switch($pri)
	{
		case 1:
		if($td>$date||$date>($td+2)) $ok=0;
		break;
		case 2:
		if($td>$date) $ok=0;
		break;
		default:
		if($td>$date) $ok=0;
	}
	$xingqi=$dayarray[$day];
	if($ok)
	{
	mysql_query("INSERT INTO desk(deskid,username,userid,date,day,time,tt,status) VALUES ( '$deskid','$username','$userid','$date','$dayarray[$day]','$time', '$tt','$status')");
	echo "<br/>成功添加！";
	echo "
		<table border='1' cellpadding=‘10’  align='center'>
		
		<tr>
		<th>桌号</th> 
		<th>用户</th>
		<th>学号</th> 
		<th>日期</th>
		<th>星期</th>
		<th>时间段</th>
		<th>预约日期</th>
		<th>身份</th>		
		</tr>";
			echo "<tr>";
			echo "<td>" . $deskid . "</td>"; 
			echo "<td>" . $username. "</td>";
			echo "<td>" . $userid . "</td>"; 
			echo "<td>" . $date . "</td>";
			echo "<td>" . $dayarray[$day] . "</td>";
			echo "<td>" . $time . "</td>";
			echo "<td>" . $tt . "</td>";
			echo "<td>" . $status . "</td>";
			echo "</tr>";		  
		echo "</table>";
	}
	else echo "<br/>失败！没有权限预约这个时间段！";
	}
}
?>

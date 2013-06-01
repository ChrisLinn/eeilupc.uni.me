<html>
<script type="text/javascript"></script> 
<head>
    <title>中国石油大学（华东）电气创新实验室预约系统</title>
 </head>
<body   style="text-align:center; vertical-align:middle; line-height:24px">
<h1>中国石油大学（华东）电气创新实验室预约系统</h1>
Welcome~ <?php echo $_COOKIE["id"]; ?>.<br />
<?php include 'header.php'; 
date_default_timezone_set('Asia/Shanghai');
?>
<?php
date_default_timezone_set('Asia/Shanghai');
if(!isset($_COOKIE["id"])) Header("Location:index.php");
$date =$_GET["date"];
if(!isset($date)) Header("Location:index.php");
if(!$date)
{ 
		$ok=0;
		echo "未填入信息！查询失败请返回！";
	}
elseif(con2db()){
	$day=date('w',strtotime($date)); 
	if($day==0)  $day=7;
	$dayarray=array(1=>"一",2=>"二",3=>"三",4=>"四",5=>"五",6=>"六",7=>"日"); 
	echo "
		<table border='1' cellpadding=‘10’ align='center' >
		<tr><th>日期及星期</th>";
	for($i=1;$i<8;$i++)
	{
		
		echo "<th>".$date-$day+$i."星期".$dayarray[$day]."</th>";
	};		
		echo "</tr>";
		echo "<tr>";
		for($i=1;$i<8;$i++)
		{
			$result = mysql_query("SELECT  *  FROM desk WHERE  date='$date' ");
			$rows = mysql_num_rows($result);
			
			echo "<td>" . 18-$rows. "</td>";
			
		  }
		echo "</tr>";
		echo "</table>";
			
			//else dateask($date-$day+$i ,$i);
	
	dateask($date,$day);
}
echo "<a href='/answer.php?date=".($date-1)."'>前一天</a>............................................<a href='/answer.php?date=".($date+1)."'>后一天</a>";
?>
<br/><br/><br/><br/><br/><br/>
<form id="do" name="do" action="do.php" method="post">
<select name="book">
<option value="1">增加预约</option>
<option value="0">取消预约</option>
</select>
<input style="width:5%" type="text" name="date"/>(请填入日期，格式如：”20120128“）
<select name="time">
<option value="08:00-10:00">08:00-10:00</option>
<option value="10:00-12:00">10:00-12:00</option>
<option value="14:00-16:00">14:00-16:00</option>
<option value="16:00-18:00">16:00-18:00</option>
<option value="19:00-21:00">19:00-21:00</option>
<option value="21:00-23:00">21:00-23:00</option>
</select>
<input value="选择"  type="submit" />
</form>
<br/>
<br/>
<a href="/index.php">返回</a>
</body>
</html>


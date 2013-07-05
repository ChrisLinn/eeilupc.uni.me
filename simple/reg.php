<html>
<head>
    <title>中国石油大学（华东）电气创新实验室预约系统</title>
 </head>
<body   style="text-align:center; vertical-align:middle; line-height:24px">
<h1>中国石油大学（华东）电气创新实验室预约系统</h1>
<br/>
<?php
if(isset($_COOKIE["id"])) Header("Location:index.php");
date_default_timezone_set('Asia/Shanghai');
?>
<form action="reg2.php" method="post">
学号： <input style="width:8%" type="text" name="id" /><br/>
姓名： <input style="width:8%" type="text" name="username" /><br/>
密码： <input style="width:8%" type="password" name="password" /><br/>
<br/>
<input style="position: relative;left: 120px" value="注册" type="submit" /> 
</form>
<a href="/index.php">返回首页</a>
</body>
</html>


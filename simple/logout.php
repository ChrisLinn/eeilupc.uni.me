<?php 
setcookie("id", "", time()-3600);
setcookie("thisweek", "", time()-3600);
Header("Location:index.php");
?>
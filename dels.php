<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
$result=mysqli_query($dbh,"DELETE FROM student WHERE Adm_no='".$_REQUEST['ids']."'");
echo "<script> alert('The student has been successfully deleted !');window.location.href='sdel.php';</script>";
mysqli_close($dbh);
?>
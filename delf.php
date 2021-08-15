<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
$result=mysqli_query($dbh,"DELETE FROM faculty WHERE ID='".$_REQUEST['ids']."'");
echo "<script> alert('The faculty has been successfully deleted !');window.location.href='fdel.php';</script>";
mysqli_close($dbh);
?>
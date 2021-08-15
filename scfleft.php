<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());

    $c1=$_POST['faculty1'];
    $c2=$_POST['faculty2'];
    $c3=$_POST['faculty3'];
    $fac1=mysqli_query($dbh," SELECT * FROM faculty WHERE ID='$c1'");
    $row=mysqli_fetch_array($fac1);
    $course1=$row['Course'];
    $fac2=mysqli_query($dbh,"SELECT * FROM faculty WHERE ID='$c2'");
    $row=mysqli_fetch_array($fac2);
    $course2=$row['Course'];
    $fac3=mysqli_query($dbh,"SELECT * FROM faculty WHERE ID='$c3'");
    $row=mysqli_fetch_array($fac3);
    $course3=$row['Course'];
    $row1=mysqli_query($dbh,"SELECT * FROM history ORDER BY no DESC LIMIT 1");
    if(!$row1)
    die("Database access failed: ".mysqli_error($dbh));
    $row=mysqli_fetch_array($row1);
    $id=$row['Sno'];
    if($c1!='0')
    {
        $result=mysqli_query($dbh,"UPDATE student SET $course1='$c1' WHERE Adm_no=$id");
        if(!$result)
        die("Database access failed: ".mysqli_error($dbh));
    }
    if($c2!='0')
    {
        $result1=mysqli_query($dbh,"UPDATE student SET $course2='$c2' WHERE Adm_no=$id");
        if(!$result1)
        die("Database access failed: ".mysqli_error($dbh));
    }
    if($c3!='0')
    {
        $result2=mysqli_query($dbh,"UPDATE student SET $course3='$c3' WHERE Adm_no=$id");
        if(!$result2)
        die("Database access failed: ".mysqli_error($dbh));
    }
    if ($result || $result1 || $result2){     
        echo '<script> alert("Successfully Registered!"); window.location.href="student.php"</script>';
    }
?>
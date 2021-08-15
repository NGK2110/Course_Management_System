<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
$row1=mysqli_query($dbh,"SELECT * FROM history ORDER BY no DESC LIMIT 1");
if(!$row1)
die("Database access failed: ".mysqli_error($dbh));
$row=mysqli_fetch_array($row1);
$id=$row['Sno'];
$result=mysqli_query($dbh,"SELECT * FROM student WHERE Adm_no=$id");
if(!$result)
die("Database access failed: ".mysqli_error());
$row=mysqli_fetch_array($result);
$id=$row['Proc'];
$result=mysqli_query($dbh,"SELECT * FROM faculty WHERE ID=$id");
if(!$result)
die("Database access failed: ".mysqli_error());
echo "<body style='background-color:pink'>";
echo "<p align='center'><font color=blue font face='arial' size='6pt'><b><u>PROCTOR DETAILS</b></u></font></p><br><br>";
while($row=mysqli_fetch_array($result))
    {
        $id=$row['ID'];
        $name=$row['Name'];
        $con= $row['Contact'];
        $qual=$row['Qualification'];
        $sex=$row['Sex'];
        echo "<center> ID : $id<br>
        Name : $name<br>
        Sex : $sex<br>
        Qualification : $qual<br>
        Contact : $con<br>";
    }
echo "<br>";
echo "<a href='student.php'><p align='center'>BACK</p></a>";
mysqli_close($dbh);
?>
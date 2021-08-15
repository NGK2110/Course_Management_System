<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
$result=mysqli_query($dbh,"SELECT * FROM course");
if(!$result)
die("Database access failed: ".mysqli_error());
echo "<body style='background-color:pink'>";
echo "<p align='center'><font color=blue font face='arial' size='6pt'><b><u>COURSES</b></u></font></p><br><br>";
echo "<table width=\"90%\" align=center border=2>";
echo "<tr><td width=\"20%\" align=center>Code </td>
      <td width=\"50%\" align=center> Name </td>
      <td width=\"30%\" align=center> Duration </td></tr>";
while($row=mysqli_fetch_array($result))
    {
        $code=$row['Code'];
        $name=$row['Name'];
        $cred= $row['Credit'];
        echo "<tr><td width=\"20%\" align=center> $code</td>
        <td width=\"50%\" align=center> $name </td>
        <td width=\"30%\" align=center> $dur</td></tr>";
    }
echo "</table><br>";

$row1=mysqli_query($dbh,"SELECT * FROM history ORDER BY no DESC LIMIT 1");
if(!$row1)
die("Database access failed: ".mysqli_error($dbh));
$row=mysqli_fetch_array($row1);
$id=$row['Sno'];
$role=$row['Role'];
$row2=mysqli_query($dbh,"SELECT * FROM student WHERE Adm_no=$id");
if(!$row2)
die("Database access failed: ".mysqli_error());
if ($result){             
    if($row2->num_rows == 1){
        echo "<a href='student.php'><p align='center'>BACK</p></a>";
    }  
    else{
        echo "<a href='student.php'><p align='center'>BACK</p></a>";
    }    
    }


mysqli_close($dbh);
?>
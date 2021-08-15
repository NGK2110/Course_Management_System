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
$row2=mysqli_query($dbh,"SELECT * FROM faculty WHERE ID=$id");
if(!$row2)
die("Database access failed: ".mysqli_error($dbh));
$row=mysqli_fetch_array($row2);
$course=$row['Course'];
$result=mysqli_query($dbh,"SELECT * FROM student WHERE $course='$id'");
if(!$result)
die("Database access failed: ".mysqli_error());
echo "<body style='background-color:pink'>";
echo "<p align='center'><font color=blue font face='arial' size='6pt'><b><u>Students</b></u></font></p><br><br>";
echo "<table width=\"90%\" align=center border=2>";
echo "<tr><td width=\"20%\" align=center> ID </td>
    <td width=\"30%\" align=center> Name </td>
    <td width=\"10%\" align=center> Sex </td>
    <td width=\"20%\" align=center> Qualification </td>
    <td width=\"20%\" align=center> Contact </td></tr>";
while($row=mysqli_fetch_array($result))
    {
        $id=$row['Adm_no'];
        $name=$row['Name'];
        $con= $row['Contact'];
        $qual=$row['Qualification'];
        $sex=$row['Sex'];
        echo "<tr><td width=\"10%\" align=center> $id </td>
        <td width=\"30%\" align=center> $name </td>
        <td width=\"10%\" align=center> $sex </td>
        <td width=\"20%\" align=center> $qual </td>
        <td width=\"20%\" align=center> $con </td></tr>";
    }
echo "</table><br>";
echo "<a href='faculty.php'><p align='center'>BACK</p></a>";
mysqli_close($dbh);
?>
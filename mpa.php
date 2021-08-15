<?php

$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error($dbh));
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error($dbh));
$result=mysqli_query($dbh,"SELECT Sno FROM history ORDER BY no DESC LIMIT 1");
if(!$result)
die("Database access failed: ".mysqli_error($dbh));
$row=mysqli_fetch_array($result);
$id=$row['Sno'];
$result=mysqli_query($dbh,"SELECT * FROM admin WHERE ID=$id");
if(!$result)
die("Database access failed: ".mysqli_error());
echo "<body style='background-color:pink'>";
echo "<p align='center'><font color=blue font face='arial' size='6pt'><b><u>MY PROFILE</b></u></font></p><br><br>";
while($row=mysqli_fetch_array($result))
    {
        $name=$row['Name'];
        $fname=$row['Fname'];
        $qual= $row['Post'];
        $dob= $row['DOB'];
        $sex=$row['Sex'];
        $contact=$row['Contact'];
        $password=$row['Password'];
        echo "<table width=\"90%\" align=center border=2>";
        echo "<tr><td width=\"40%\" align=center>Admission number: </td>
        <td width=\"40%\" align=center> $id </td></tr>
        <tr><td width=\"40%\" align=center>Name: </td>
        <td width=\"40%\" align=center> $name</td></tr>
        <tr><td width=\"40%\" align=center>Father's Name: </td>
        <td width=\"40%\" align=center> $fname</td></tr>
        <tr><td width=\"40%\" align=center>Highest Qualification: </td>
        <td width=\"40%\" align=center> $qual</td></tr>
        <tr><td width=\"40%\" align=center>Date of Birth: </td>
        <td width=\"40%\" align=center> $dob</td></tr>
        <tr><td width=\"40%\" align=center>Sex: </td>
        <td width=\"40%\" align=center> $sex</td></tr>
        <tr><td width=\"40%\" align=center>Contact: </td>
        <td width=\"40%\" align=center> $contact</td></tr>
        <tr><td width=\"40%\" align=center>Password: </td>
        <td width=\"40%\" align=center> $password</td></tr>";
        
    }
echo "</table><br>";
echo "<a href=\"edita.php?ids=$id& names=$name & fnames=$fname & quals=$qual&dobs=$dob&sexs=$sex&contacts=$contact&passwords=$password\">
    <p align='center'><input type='submit' name='btn' value='EDIT'/></p></a>";
echo "<a href='admin.php'><p align='center'>Home</p></a>";
mysqli_close($dbh);
?>
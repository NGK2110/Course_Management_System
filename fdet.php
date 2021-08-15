<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
?>

<!doctype html>
<html>
<head>
<title>FACULTY DETAILS</title>
<link rel="stylesheet" href="css/all.css">
</head>
<body>
<h1 style="color: blue;"><u><b>FACULTY DETAILS</b></u></h1>
<form method="post" action="">
<label><b>ID</b></label>
<input type="number" name="id"/><br><br>
<input type="submit" value="Get Details" name="btn"/><br>
<br/> <br/> 
<a href="admin.php">Home</a>
<br/> <br/> 
</body>
</html>

<?php
if(isset($_REQUEST["btn"]))
{
$id=$_POST["id"];
if($id){
    $result=mysqli_query($dbh,"SELECT * FROM faculty WHERE ID=$id");
    if(!$result)
    die("Database access failed: ".mysqli_error());
    while($row=mysqli_fetch_array($result))
    {
        $name=$row['Name'];
        $fname=$row['Fname'];
        $qual= $row['Qualification'];
        $dob= $row['DOB'];
        $sex=$row['Sex'];
        $contact=$row['Contact'];
        echo "<table width=\"90%\" align=center border=2>";
        echo "<tr><td width=\"40%\" align=center>Faculty ID: </td>
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
        <td width=\"40%\" align=center> $contact</td></tr>";
        echo "</table>";
    }
    if($result->num_rows == 0)
    echo "Invalid Admission number ";
}else{
    echo "Invalid data ";
}
}
mysqli_close($dbh);
?>
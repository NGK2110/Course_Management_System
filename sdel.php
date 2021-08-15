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
<title>REMOVE Company DETAILS</title>
<link rel="stylesheet" href="css/all.css">
<style>
body{background-color:pink;}
body{font_family:Arial,Helvetica,sansserif;}
body:before,body:after{
content="";
position: fixed;
background: #900;
left:0;
right:0;
height:10px;
}
body:before{
top: 0;
}
body:after{
bottom:0;
}
body{
border-left: 10px solid #900;
border-right:10px solid #900;
text-align:center;
}
form{
display: inline-block;
}
input[type=text] {
text-align: centre;
width:80%;
padding:5px 10px;
margin:8px 0;
display:inline_block;
border: 1px solid #ccc;
box-sizing:border-box;
}
button{
background-color:#4CAF50;
text-align: centre;
color:white;
padding: 14px 20px;
margin: 8px 0;
border:none;
cursor: pointer;
width: 100%;
}
button:hover{
opacity: 0.8;
} 

</style>
</head>
<body>
<h1 style="color: blue;"><u><b>DELETE COMPANY DETAILS</b></u></h1>
<form method="post" action="">
<label><b>ID</b></label>
<input type="number" name="id"/><br><br>
<input type="submit" value="Delete" name="btn"/><br>
</form>
<br/><br/>
<a href="admins.php">Back</a>&nbsp<span class="tab"></span>&nbsp<a href="admin.php">Home</a>
<br/><br/>
</body>
</html>

<?php
if(isset($_REQUEST["btn"]))
{
$id=$_POST["id"];
if($id)
{
    $result=mysqli_query($dbh,"SELECT * FROM student WHERE Adm_no=$id");
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
        $password=$row['Password'];
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


    }
    echo "</table><br>";

    echo "<a href=\"dels.php?ids=$id\"><p align='center'><input type='submit' name='btn' value='CONFIRM'/></p></a>";
    if($result->num_rows == 0){
        echo "<script> alert('Admission number not found !');window.location.href='sdel.php';</script>";
    }
}
}
mysqli_close($dbh);
?>
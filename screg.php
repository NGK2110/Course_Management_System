<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
$result=mysqli_query($dbh,"SELECT * FROM course");
$result1=mysqli_query($dbh,"SELECT * FROM course");
$result2=mysqli_query($dbh,"SELECT * FROM course");
?>

<!doctype html>
<html>
<head><title>COURSE REGISTRATION</title>
<link rel="stylesheet" href="css/all.css">
<style>
p{color:red; }
body{background-color:pink;}
h1{background-color:yellow;}
p{background-color:powderblue;}
body{font_family:Arial,Helvetica,sansserif;}
body:before,body:after{
content="";
position:fixed;
background:#900;
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
padding: 8px 20px;
margin: 8px 0;
border:none;
cursor: pointer;
width: 10%;
}
button:hover{
opacity: 0.8;
}
.tab{
display:inline-block;
margin-left:500px;
}
</style>
</head>
<body>
<h1 style="color:green;text-align:right;"><b><u>COURSE REGISTRATION</u></b><span class="tab"></span><a href="student.php">BACK</a></h1>
<br>
<div><form method="POST" action="scf.php">
<?php
echo "<center>";
echo "Course 1: ";
echo "<select name='course1'>";
echo "<option value='0'>Select</option>";
while($row=mysqli_fetch_array($result))
{
    echo "<option value='$row[Code]'> $row[Code] - $row[Name]</option>";
}
echo "</select><br><br>";
echo "Course 2: ";
echo "<select name='course2'>";
echo "<option value='0'>Select</option>";
while($row=mysqli_fetch_array($result1))
{
    echo "<option value='$row[Code]'> $row[Code] - $row[Name]</option>";
}
echo "</select><br><br>";
echo "Course 3: ";
echo "<select name='course3'>";
echo "<option value='0'>Select</option>";
while($row=mysqli_fetch_array($result2))
{
    echo "<option value='$row[Code]'> $row[Code] - $row[Name]</option>";
}
echo "</select><br><br>";
echo "</center>";
echo "<p align='center'><input type='submit' name='btn' value='SUBMIT'/></p>";
?>
</form></div>
</body>
</html>
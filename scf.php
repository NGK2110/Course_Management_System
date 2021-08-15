<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
$courses1=$_POST['course1'];
$courses2=$_POST['course2'];
$courses3=$_POST['course3'];
$fac1=mysqli_query($dbh," SELECT * FROM faculty WHERE Course='$courses1'");
$fac2=mysqli_query($dbh,"SELECT * FROM faculty WHERE Course='$courses2'");
$fac3=mysqli_query($dbh,"SELECT * FROM faculty WHERE Course='$courses3'");
?>
<!doctype html>
<html>
<head><title>FACULTY SELECTION</title>
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
<h1 style="color:green;text-align:right;"><b><u>FACULTY SELECTION</u></b><span class="tab"></span><a href="student.php">BACK</a></h1>
<br>
<div><form method="POST" action="scfleft.php">
<?php
echo "<center>";
if($courses1!='0')
{
echo "$courses1 : ";
echo "<select name='faculty1'>";
echo "<option value='0'> - Select - </option>";
while($row=mysqli_fetch_array($fac1))
{
    echo "<option value='$row[ID]'> $row[Name]</option>";
}
echo "</select><br><br>";
}
if($courses2!='0')
{
echo "$courses2: ";
echo "<select name='faculty2'>";
echo "<option value='0'> - Select - </option>";
while($row=mysqli_fetch_array($fac2))
{
    echo "<option value='$row[ID]'> $row[Name]</option>";
}
echo "</select><br><br>";
}
if($courses3!='0')
{
echo "$courses3: ";
echo "<select name='faculty3'>";
echo "<option value='0'> - Select - </option>";
while($row=mysqli_fetch_array($fac3))
{
echo "<option value='$row[ID]'> $row[Name]</option>";
}
echo "</select><br><br>";
}
echo "</center>";
echo "<p align='center'><input type='submit' name='btn' value='SUBMIT'/></p>";
?>
</form></div>
</body>
</html>
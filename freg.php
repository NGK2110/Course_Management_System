<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
$resultSet=mysqli_query($dbh,"SELECT * FROM course");
?>

<!doctype html>
<html>
<head>
<title>FACULTY REGISTRATION</title>
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
padding: 8px 20px;
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
<h1 style="color: blue;"><u><b>ENTER FACULTY DETAILS</b></u></h1>
<form method="post" action="freg1.php">
<table>
<tr>
<td>
<label><b>Name</b></label>
</td>
<td>
<input type="text" name="name"/>
</td>
</tr><tr>
<td>
<label><b>Father's Name</b></label>
</td>
<td>
<input type="text" name="fname"/>
</td>
</tr><tr>
<td>
<label><b>Highest Qualification</b></label>
</td>
<td>
<input type="text" name="qual"/>
</td>
</tr><tr>
<td>
<label><b>DoB</b></label>
</td>
<td>
<input type="date" name="dob"/>
</td>
</tr><tr>
<td>
<label><b>Mobile No.</b></label>
</td>
<td>
<input type="text" name="contact"/>
</td>
</tr><tr>
<td>
<label><b>Sex</b></label>
</td>
<td>
<select name="sex">
 <option values="Choose your gender">Choose your Gender</option>
 <option values="MALE">MALE</option>
 <option values="FEMALE">FEMALE</option>
 </select>
</td>
</tr>
<tr>
<td>
<label><b>Course Specialized In</b></label>
</td>
<td>
<select name="course">
<?php
while($row=mysqli_fetch_array($resultSet))
{
    $code=$row['Code'];
    $name=$row['Name'];
    echo "<option value='$code'>$code - $name</option>";
}
?>
</select>
</td>
</tr> 
</table>
<button>ADD</button>
</form>
<br/> <br/> 
<a href="admin.php">Home</a>
</body>
</html>

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
<title>STUDENT REGISTRATION</title>
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
<h1 style="color: blue;"><u><b>ENTER Manager DETAILS</b></u></h1>
<form method="post" action="">
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
</table>
<br/> <br/>
<input type="submit" value="ADD" name="btn"/><br>
</form>
<br/> <br/> 
<a href="admin.php">Home</a>
<br/> <br/> 
</body>
</html>


<?php

if(isset($_REQUEST["btn"]))
{
$name=$_POST["name"];
$fname=$_POST["fname"];
$qual=$_POST["qual"];
$sex=$_POST["sex"];
$dob=$_POST["dob"];
$contact=$_POST["contact"];

if($name && $fname && $qual && $sex && $dob && $contact){
    $result = mysqli_query($dbh,"INSERT INTO student(Name,Fname,DOB,Sex,Contact,Qualification) Values('$name','$fname','$dob','$sex','$contact','$qual')");
	if (!$result){     
        echo '<script> alert("Failed to Add!"); </script>';
    }
    else{
        echo '<script> alert("Successfully Added!"); </script>';
    }
}else{
    echo "Fill all the details ";
}
}
mysqli_close($dbh);
?>
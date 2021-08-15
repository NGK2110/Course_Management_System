<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
$name=$_POST["name"];
$fname=$_POST["fname"];
$qual=$_POST["qual"];
$sex=$_POST["sex"];
$dob=$_POST["dob"];
$contact=$_POST["contact"];
$course=$_POST["course"];
if($name && $fname && $qual && $sex && $dob && $contact &&$course){

    $result = mysqli_query($dbh,"INSERT INTO faculty(Name,Fname,DOB,Sex,Contact,Qualification,Course) Values('$name','$fname','$dob','$sex','$contact','$qual','$course')");
	if (!$result){     
        echo '<script> alert("Failed to Add!");window.location.href="freg.php"</script>';
    }
    else{
        echo '<script> alert("Successfully Added!");window.location.href="freg.php"</script>';
    }
   
}else{
    echo "Fill all the details ";
}
mysqli_close($dbh);
?>
<?php
$dbh=mysqli_connect("localhost","root","");
if(!$dbh)
die("Unable to connect to MySQL: ".mysqli_error());
if(!mysqli_select_db($dbh,"project"))
die("Unable to connect to select database: ".mysqli_error());
?>
<!doctype html>
<html>
<head><title>Faculty Profile</title>
<link rel="stylesheet" href="all.css">
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
<h3> Edit Faculty Profile </h3>
<form method="POST" action="">
<table border="0" width="60%">

<tr><td width="30%">Name: </td><td><input type="text" name="nname" value="<?php echo $_REQUEST['names'];?>"></td></tr>
<tr><td width="30%">Father's Name: </td><td><input type="text" name="nfname" value="<?php echo $_REQUEST['fnames'];?>"></td></tr>
<tr><td width="30%">Qualification </td><td><input type="text" name="nqual" value="<?php echo $_REQUEST['quals'];?>"></td></tr>
<tr><td width="30%">Date of Birth: </td><td><input type="date" name="ndob" value="<?php echo $_REQUEST['dobs'];?>"></td></tr>
<tr><td width="30%">Sex: </td><td><select name="nsex">
 <option values="<?php echo $_REQUEST['sexs'];?>"><?php echo $_REQUEST['sexs'];?></option>
 <option values="MALE">MALE</option>
 <option values="FEMALE">FEMALE</option>
 </select></td></tr>
<tr><td width="30%">Contact: </td><td><input type="text" name="ncontact" value="<?php echo $_REQUEST['contacts'];?>"></td></tr>
<tr><td width="30%">Password: </td><td><input type="text" name="npassword" value="<?php echo $_REQUEST['passwords'];?>"></td></tr>
</table>
<input type="submit" value="Save & Update" name="btn" />
<input type="hidden" name="id" value="<?php echo $_REQUEST['ids'];?>">
</form>
</body>
</html>

<?php
if(isset($_REQUEST["btn"])){
    $id=$_POST['id'];
    $nname=$_POST["nname"];
    $nfname=$_POST["nfname"];
    $nqual=$_POST["nqual"];
    $nsex=$_POST["nsex"];
    $ndob=$_POST["ndob"];
    $ncontact=$_POST["ncontact"];
    $npassword=$_POST["npassword"];
    $result=mysqli_query($dbh,"UPDATE faculty SET Name='$nname',Fname='$nfname',Qualification='$nqual',Sex='$nsex',
    DOB='$ndob',Contact='$ncontact',Password='$npassword' WHERE ID=$id");
    
    $row1=mysqli_query($dbh,"SELECT * FROM history ORDER BY no DESC LIMIT 1");
    if(!$row1)
    die("Database access failed: ".mysqli_error($dbh));
    $row=mysqli_fetch_array($row1);
    $id=$row['Sno'];
    $role=$row['Role'];
    $row2=mysqli_query($dbh,"SELECT * FROM faculty WHERE ID=$id AND $role='Faculty'");
    if (!$result){     
        
        echo '<script> alert("Failed to Update!"); window.location.href="editf.php"</script>';
    }
    else{
        if($row2->num_rows == 0){
            echo '<script> alert("Successfully Updated!"); window.location.href="modifyf.php"</script>';
        }
        else{
            echo '<script> alert("Successfully Updated!"); window.location.href="mpf.php"</script>';
        }
        
    }
}
mysqli_close($dbh);

?>
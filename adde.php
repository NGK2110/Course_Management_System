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
<h1 style="color: blue;"><u><b>ENTER EMPLOYEE DETAILS</b></u></h1>
<form name="adde" method="post" action="addemployee.jsp">
<table>
<tr>
<td>
<label><b>EMPLOYEE ID</b></label>
</td>
<td>
<input type="number" name="id"/>
</td>
</tr>
<tr>
<td>
<label><b>Name</b></label>
</td>
<td>
<input type="text" name="name"/>
</td>
</tr>
<tr>
<td>
<label><b>Company ID</b></label>
</td>
<td>
<input type="number" name="cid"/>
</td>
</tr><tr>
<td>
<label><b>Department Name</b></label>
</td>
<td>
<input type="text" name="dname"/>
</td>
</tr><tr>
<td>
<label><b>Designation</b></label>
</td>
<td>
<input type="text" name="des"/>
</td>
</tr><tr>
<td>
<label><b>Salary</b></label>
</td>
<td>
<input type="text" name="salary"/>
</td>
</tr>
</table>
<button>ADD</button>
</form>
<br/> <br/> 
<a href="home.html">Home</a>
</body>
</html>
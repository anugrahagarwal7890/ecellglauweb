<?php
$uname=$_POST["un"];
$password=$_POST["pwd"];
$con=mysqli_connect("localhost","root","","ICT");
if(!$con)
die("Server could not connected");
$sql="select * from reg where UserName='".$uname."'";
$rs=mysqli_query($con,$sql);
$value=mysqli_fetch_assoc($rs);
if($value["Password"]==$password)
header("location:enter.php");
else
echo "Invalid username or password";
?>
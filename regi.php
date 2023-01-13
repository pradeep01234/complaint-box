<?php
$host = "127.0.0.1";  
$user = "root";  
$password = 'admin';  
$db_name = "priya"; 

$con = mysqli_connect($host, $user, $password, $db_name); 

$name =$_POST["name"];
$tname = $_POST["dipt"];
$comp = $_POST["main"];


$sql = "insert into $tname(name,comp) values('$name','$comp')";

$data = mysqli_query($con,$sql);


mysqli_close($con);

header("location: student.html");


?>
<?php
$host = "127.0.0.1";  
$user = "root";  
$password = 'admin';  
$db_name = "priya"; 

$con = mysqli_connect($host, $user, $password, $db_name); 

$sql = "select name from temp";

$data = mysqli_query($con,$sql);
$row = mysqli_fetch_array($data);

echo $row[0];

$sql = "select t from login where name='$row[0]'";

$data = mysqli_query($con,$sql);

$row = mysqli_fetch_array($data);

$sql = "truncate table $row[0]";

$data = mysqli_query($con,$sql);

header("location: desh.php");

?>
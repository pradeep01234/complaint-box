<?php

$host = "127.0.0.1";  
    $user = "root";  
    $password = 'admin';  
    $db_name = "priya"; 

    $con = mysqli_connect($host, $user, $password, $db_name); 


    $username = $_POST['name'];  
    $password = $_POST['pass'];

    $q = "insert into temp(name) values('$username')";
    $d = mysqli_query($con,$q);



    $sql = "select * from login where name = '$username' and pass = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location: desh.php');
        }  
        else{
            header('location: index.html');
        }



?>
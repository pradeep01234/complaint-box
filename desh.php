<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        h4 {
            text-align: center;
        }

        table {
            margin-top: 10%;
            margin-left: 20%;
            width: 900px;
            text-align: center;
        }

        button {
            margin-top: 10px;
            margin-left: 40%;
            width: 280px;
            background-color: rgb(255, 0, 0);
            color: #fff;
            border-radius: 60px;
            border: 2px solid rgb(255, 0, 0);
        }
    </style>
    <title>Document</title>
</head>

<body>
    <nav>
        <a href="index.html">Home</a>
        <a href="student.html">Raise an complaint</a>
        <a href="#bto">About-us</a>
    </nav>



<?php
$host = "127.0.0.1";  
$user = "root";  
$password = 'admin';  
$db_name = "priya"; 

$con = mysqli_connect($host, $user, $password, $db_name); 

$q="select name from temp";
$res  = mysqli_query($con,$q);
$row = mysqli_fetch_array($res);

?>





    <main>
        <h1>Welcome, <?php echo $row[0]; ?></h1>
        <h4>&larr; complaint table &rarr;</h4>
        <table border="2px">
            <tr>
                <td>S.No</td>
                <td>Name</td>
                <td>complaint</td>
            </tr>

            <?php

        $q = "select t from login where name='$row[0]'";
        $o = mysqli_query($con,$q);
        $r = mysqli_fetch_array($o);
        //echo $r[0];//db

        $dop  = "select * from $r[0]";
        $dop1 = mysqli_query($con,$dop);
        while($pro = mysqli_fetch_array($dop1)){
        
            # code...?>

        


            <tr>
            <td>
                <?php
                echo $pro['no'];
                ?>
            </td>
<td><?php
echo $pro['name'];
?></td>
<td><?php
echo $pro['comp'];
?></td>


   
<?php
                }
            

?>
</tr>
        </table>
    </main>
    <form action="clr.php" method="post">
    <button type="submit">clear all</button>
    </form>
</body>

</html>
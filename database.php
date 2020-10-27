<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $dbname = "epe2";
    $conn = new mysqli($host , $user, $pass, $dbname);
    mysqli_query($conn , "SET character_set_result=utf8");
    if($conn->connect_error){
        die("Database Error : " . $conn->connect_error);
    }
 
?>

<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "iblogs";

    $conn = mysqli_connect( $servername, $username, $password, $database);
    
    if(!$conn){
        die("error occurred". mysqli_connect_error());
    }


?>
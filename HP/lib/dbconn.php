<?php
    $conn = mysqli_connect("127.0.0.1", "web", "mysql","webDB");
    if(!$conn){

        echo "Error: Unable to connect to MySQL." . PHP_EOL;
    
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    
        exit();
    
    }
    
    mysqli_query($conn, "set names utf8");
?>


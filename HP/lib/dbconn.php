<?php
    $conn = mysqli_connect('20.196.204.220', 'root','mysql','webDB', '8010', true);
    if(!$connect){

        echo "Error: Unable to connect to MySQL." . PHP_EOL;
    
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    
        exit();
    
    }
    
    mysqli_query($conn, "set names utf8");
?>

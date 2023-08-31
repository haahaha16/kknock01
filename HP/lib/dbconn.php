<?php
    $conn = mysqli_connect("20.196.204.220", "root","mysql","webDB");
    if(!$connect){

        echo "<p>Failure - " . mysqli_connect_error() . "</p>";
    } else {
      echo "<p>Success</p>";
    
    }
    
    mysqli_query($conn, "set names utf8");
?>

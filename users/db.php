<?php

    $con = mysqli_connect("localhost","root","boomer2004@","coffee-shop");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    
?>
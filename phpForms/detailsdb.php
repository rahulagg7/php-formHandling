<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "detailsdb";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn) {
        echo "Database connected <br>";
    } 
    else{
        echo "connection failed <br>";
    }
    
?>
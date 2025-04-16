<?php
    $conn = mysqli_connect("localhost", "root", "", "fluxora");
    if(!$conn){
        echo "Database connected" . mysqli_connect_error();
    }
?>
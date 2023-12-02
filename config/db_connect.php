<?php
$conn = mysqli_connect("localhost","Henry","1234567","ninja_pizza");
    if(!$conn){
        echo 'Connection Error'. mysqli_connect_error();
    }
?>
<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'test';

    $con = mysqli_connect($host, $user, $password, $db);
    if(!$con){
        echo 'connection failed!';
    } else{
        echo 'connection successful!';
    }

    $un = $_POST['name'];
    $pass = $_POST['pass'];

    echo $un;

    $sql = "INSERT INTO data(username, password) VALUES('$un','$pass')";
    $run = mysqli_query($con, $sql);

    if(!$run){
        echo 'submission failed';
    } else{
        echo 'submission done';
    }
?>
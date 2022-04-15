<?php

    $host = "localhost";
    $user = "godhojong1";
    $pass = "qkrwhdgh1!";
    $db = "godhojong1";
    $connect = new mysqli($host, $user, $pass, $db);
    $connect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "DATABASE Conncet False";
    } else {
        // echo "DATABASE Connect True";
    }
?>
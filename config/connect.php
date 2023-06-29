<?php 
    $serverName = 'localhost';
    $userName = 'root';
    $password = '';
    $dbName = 'blog';

    $connect = new mysqli($serverName,$userName,$password,$dbName);

    if ($connect->connect_error) {
        die ('error :'.$connect->error);
    } 
?>
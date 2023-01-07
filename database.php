<?php
    $host = 'localhost';
    $user = 'postgres';
    $password = 'password';
    $database = 'crud_user';
    $port = '5432';

    $connection = "host={$host} port={$port} dbname={$database} user={$user} password={$password} ";
    $dbconn = pg_connect($connection);  

    if($dbconn){
        echo "Successfully connected";
    }
?>
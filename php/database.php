<?php 
    $server = "localhost";
    $userName = "root";
    $password = "";
    $dataBase = "php-login-database";


    try{

        $conexion = new PDO("mysql:host=$server;dbname=$dataBase",$userName,$password);
        $conexion ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "conexion establecida";


    }catch(PDOException $e){
        die("connected faild: " .$e->getMessage());

    }



?>
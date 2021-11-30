<?php

$server = "localhost";
$user = "Rondinei";
$pass = "123456";
$bd   = "bdcurso";

try {
    $con = new PDO("mysql:host=$server;dbname=$bd",$user,$pass);

    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conectado ao bd";
} catch(PDOExeception $e) {
    echo "Deu ruim:" . $e->getMessage();
}
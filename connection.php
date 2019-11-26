<?php

$server = "localhost";
$user = "root";
$pass = "";
$dbname = "bd_aula";

// conn
$conn = new mysqli($server, $user, $pass, $dbname);

if($conn->connect_error) {
    die("Conexão Falhou: ".$conn->connect_error);
} else {
    echo 'Conectado!';
}

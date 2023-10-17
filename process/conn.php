<?php
/*Usaremos PDO para fazer a conxão com o banco*/

session_start(); /*PHP incia uma sessão de usuário*/

$user = "root";
$pass = "";
$db = "pizzaria";
$host = "localhost";

try {

    /*Código que oode lançar exceções*/
    $conn = new PDO ("mysql:host = {$host}; dbname = {$db}", $user, $pass);

    /*Habilitar erros*/
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
}
catch(PDOException $e) {
    print "Error: " . $e->getMessage() . "</br>";
    die();
}


?>
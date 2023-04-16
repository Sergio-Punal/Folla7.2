<?php
//listaVendedores.php
$servidor = "localhost";
$usuario = "root";
$passwd = "root";
$base = "proba";

$pdo = new PDO("mysql:host=$servidor;dbname=$base;charset=utf8mb4", $usuario, $passwd);
$pdostatement = $pdo->query("SELECT nome, email FROM vendedor ORDER BY email ASC");

$resultado = $pdostatement->fetchAll(PDO::FETCH_ASSOC);

// TODO: QUE LO COMBIERTA AQUI A ORDENADO

echo json_encode($resultado);




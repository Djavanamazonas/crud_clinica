<?php 
$server = "localhost";
$user = "root";
$pass = "cimatec";
$bd = "clinica_saude";

$pdo = mysqli_connect($server, $user, $pass, $bd);

if (!$pdo) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>
<?php

$hostname = "localhost";
$bancodedados = "form";
$usuario = "root";
$senha = "";

/*$con = mysqli_connect($hostname, $usuario, $senha, $bancodedados) or die("Erro de conexão");*/
$con= new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($con->connect_errno) {
    echo "Falha ao conectar: (" . $con->connect_errno . ") " . $con->connect_error;
}


?>
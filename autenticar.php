<?php
session_start();
include("conexao.php");

$emai=$_POST['email'];
$senha_digitada=$_POST['senha'];

$sql = "SELECT * FROM  clientes WHERE senha = '$senha' AND email ='$email'";

$resultado = mysqli_query(
    $conexao,
    $sql
);
$cliente = mysqli_fetch_assoc($resultado)

if($cliente){
    echo"login realizado com sucesso";
}else{
echo"Email ou senha invalidos"
}

?>







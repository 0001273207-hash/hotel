<?php

$hosts="localhost";
$usuario="root";
$senha="";
$banco="hotel_db";

$conexao=mysqli_connect($hosts, $usuario, $senha, $banco);

if ($conexao) {
    echo "conectou ao banco de dados";
}
else {
    echo "não conectou ao banco de dados";
}

?>
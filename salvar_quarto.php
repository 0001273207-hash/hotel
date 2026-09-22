<?php

 require_once 'conexao.php';

$id_hotel = $_POST['id_hotel'];
$numero_quarto = $_POST['numero_quarto'];
$tipo_quarto = $_POST['tipo_quarto'];
$preco_diaria = $_POST['preco_diaria'];


$sql = "INSERT INTO quartos (hotel_id, numero, tipo, preco_diaria)
        VALUES ('$id_hotel', '$numero_quarto', '$tipo_quarto', '$preco_diaria')";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {

    echo "Erro ao cadastrar: " . mysqli_error($conexao);

    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
   DADOS DE CADASTRO
        </h2>

        <p><b>Id do Hotel:</b> <?php
        
        echo $id_hotel

        ?></p>

        <p><b>numero:</b> <?php
        
        echo $numero_quarto

        ?></p>

        <p><b>tipo:</b>  <?php
        
        echo $tipo_quarto

        ?></p>

 <p><b>preço:</b> <?php
        
        echo $preco_diaria

        ?></p>
 </body>
 </html>
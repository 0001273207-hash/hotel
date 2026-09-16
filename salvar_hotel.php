<?php
include 'conexao.php';

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$estrelas = $_POST['estrelas'];
$email = $_POST['email'];
$senha = $_POST['senha'];



$sql = "INSERT INTO hoteis (nome, cidade, estrelas,email,senha)
VALUES('$nome','$cidade','$estrelas','$email','$senha')";

$resultado = mysqli_query($conexao, $sql);

if (!$resultado) {
    echo "erro ao cadastrar" . mysqli_error($conexao);
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel cadastrado</title>
</head>

<body style="
    text-align: center;
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #0e97e6, #096eeb, #0d63f8);
    min-height: 100vh;
    margin: 0;
    padding-top: 100px;
">

    <h1 style="color: white;">VagaViva</h1>

    <br><br>

    <h2 style="color: #080606;">
        Hotel cadastrado com sucesso!
    </h2>

    <br>

    <p style="
        background-color: white;
        display: inline-block;
        padding: 20px;
        border-radius: 10px;
        font-size: 18px;
    ">
        Hotel: <?php echo $nome; ?><br><br>
        Cidade: <?php echo $cidade; ?><br><br>
        Estrelas: <?php echo $estrelas; ?> ⭐<br>
        email: <?php echo $email; ?><br><br>
        senha: <?php echo "🔒🔒🔒"; ?> 

        

    </p>

    <br><br>

    

</body>

</html>

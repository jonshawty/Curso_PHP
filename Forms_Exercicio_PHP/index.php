<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de inscrição</title>
</head>

<body>
    <p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

    <form action="script.php" method="post">
        <?php
        $mensagemDeErro = isset($_SESSION['erroMensagem']) ? $_SESSION['erroMensagem'] : '';
        if (!empty($mensagemDeErro)) {
            echo $mensagemDeErro;
        }
        ?>
        <p>Seu nome:<input type="text" name="nome" /></p>
        <p>Sua idade:<input type="text" name="idade" /></p>
        <p><input type="submit" value="Enviar" /></p>
    </form>
</body>

</html>
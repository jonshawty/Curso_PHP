<?php 

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
 
$nome = $_POST["nome"];
$idade = $_POST["idade"];

if(empty($nome))
{
    $_SESSION['erroMensagem'] = "O nome não pode ser vazio, preencha corretamente.";
    header('location: index.php');
    return; 
}
if(strlen($nome) < 3)
{
    $_SESSION['erroMensagem'] = "O nome precisa ter no minimo 3 caracteres.";
    header('location: index.php');
    return;
}

if(strlen($nome) > 40)
{
    $_SESSION['erroMensagem'] = "O nome é muito extenso.";
    header('location: index.php');
    return;
}

if(!is_numeric($idade))
{
    $_SESSION['erroMensagem'] = "Informe sua idade em números.";
    header('location: index.php');
    return;
}

if($idade >= 6 && $idade <=12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "infantil")
        {
            echo "O jogador " . $nome . " compete na categoria " . $categorias[$i];   
        }
    }
}
else if($idade >= 13 && $idade <=18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "adolescente")
            echo "O jogador " . $nome . " compete na categoria " . $categorias[$i];
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "adulto")
            echo "O jogador " . $nome . " compete na categoria " . $categorias[$i];
    }
}

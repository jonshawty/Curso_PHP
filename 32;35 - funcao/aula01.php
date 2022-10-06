<?php

function soma($a, $b)
{
    echo "$a + $b = " . ($a +$b);
}

soma(10,10);

echo "<br>";

$nomes = ['Jonata', 'Maria', 'Savio'];

foreach($nomes as $nome)
{
    saudacao($nome);
}


function saudacao($valor)
{
    echo "Bom dia, $valor.<br>";
}

#FUNÇÕES COM PARAMETROS PRÉ DEFINIDOS#

function multiplicar($a, $b = 2)
{
    echo "a multiplicação de $a por $b é = " . ($a * $b);
}

multiplicar(10);
echo "<br>";
multiplicar(10,10);
echo "<br>";

function dividir($a, $b = 2) #dividir por 2 por padrão
{
    echo "a divisão de $a por $b é = " . ($a/$b);
}

dividir(10);
dividir(a:100); #forma de passar um argumento para uma variavel expecifica




?>
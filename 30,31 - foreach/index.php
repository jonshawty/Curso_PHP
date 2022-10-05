<?php


#CICLOS / LOOPS
#ForEACH

$nomes = ['joao', 'ana', 'carlos'];
foreach($nomes as $nome){
    echo $nome . '<br>';
}
echo '<hr>';

##################################

$capitais = [
    'Portugal' => 'Lisboa',
    'Brasil' => 'Brasília',
    'Espanha' => 'Madrid'
];

#faz a busca na chave e no valor 
#pega a primeira chave e apresenta o valor da chave
foreach($capitais as $key => $value){ #
    echo "Para o pais $key a capital é $value<br>";
}




?>
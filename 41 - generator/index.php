<?php

function busca_numero()
{
    for($i = 0; $i<10; $i++){
        yield $i;
    }
}

foreach(busca_numero() as $numero){
    echo "$numero <br> ";
}


function exibe_nomes(){
    yield 'jonata';
    yield 'savio';
    yield from ['jonata', 'maria', 'clara'];

}

foreach (exibe_nomes() as $nome)
{
    echo "$nome <br>";
}    
?>
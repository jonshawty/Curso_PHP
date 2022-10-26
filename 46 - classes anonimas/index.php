<?php

#CLASSES ANONIMAS

#com o PHP 7 foi introduzido um conceito usado em outras linguagens
#e que se designa por classes anonimas. Este tipo de classe
#só faz sentido quando queremos instaciar apenas um objeto de dessa classe.

#exemplo 1 "normal"

class objeto1
{
    function teste()
    {
        echo 'teste - normal'; 
    }
}

$a = new objeto1();

#exemplo classe anonima

$b = new class
{
    function teste()
    {
        echo 'teste - classe anonima';
    }
};

#classes anonimas tem necessidade de fechar a classe com ;

$a->teste();
echo '<br>';
$b->teste();


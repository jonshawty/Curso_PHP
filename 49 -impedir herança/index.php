<?php

#FINAL

#para impedir que uma classe derivada possa fazer override de metodos
#podemos utilizar a expressão fimal da seguinte forma:

class Veiculo
{
    final function mover() #final torna impossivel ocorrer o override
    {

    }
}

class Bicicleta extends Veiculo
{
    /*function mover()
    {
        #override do codigo original
    }*/
}

#Podemos, inclusive, definir uma class como não sendo possivel ser herdada
#colocando FINAL antes da classe

final class Humano
{
    function teste()
    {
        echo "teste";
    }
}

class Homem extends Humano
{
    
}

$a = new Homem();
$a->teste();
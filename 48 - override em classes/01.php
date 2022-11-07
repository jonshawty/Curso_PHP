<?php

#OVERRIDING

#O mecanismo de overriding permite a uma classe derivada
#ter métodos reescritos especificamente para a essa classe.

#Por exemplo, podemos ter um metodo teste na classe base
#e ter o mesmo metodo teste com classe diferente na classe derivada



class Animal
{
    function mover()
{
    echo "mover a partir da classe base.";
}
}

class Mamifero extends Animal
{


}

class Peixe extends Animal
{
    function mover()
    {
        echo "mover a partir da classe peixe.";
    }
}

$animal = new animal;
echo $animal->mover();
echo '<br>';

$mamifero = new Mamifero;
echo $mamifero->mover();
echo '<br>';

$peixe = new Peixe();
echo $peixe->mover();


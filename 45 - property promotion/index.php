<?php


#CONSTRUTOR
#no PHP 8 foi introduzido o conceito de Property Promotion
#no construtor. Isto permite definir propriedades diretamente
#nos parametros do construtor. 

#no php 7 ou inferior


class Humano
{
    public $nome;
    public $sobrenome;

    function __construct($n, $s)
    {
        $this->nome = $n;
        $this->sobrenome = $s;
    }

}


#no php 8 podemos criar a mesma classe da seguinte forma

class Humano1
{
    function __construct(public $nome, public $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }
}



$h1 = new Humano('jonata', 'horsth'); 
$h2 = new Humano1 ('maria', 'clara');

echo $h1->nome . ' ' .$h1->sobrenome;
echo '<br>';
echo $h2->nome . ' ' .$h2->sobrenome;

#as classes não sao case sensitive, exemplo:
echo '<br>';
$h3 = new humano1('case', 'sensitive');
echo $h3->nome . ' ' .$h3->sobrenome;
<?php

#ACESS LEVELS - NIVEIS DE ACESSO

#existem 3 tipos de niveis de acesso a elementos dentro de uma class.
#public, protected e private

#PUBLIC
#os membros publicos (propriedades ou metodos) de uma classe, estão sempre acessiveis.
#se criarmos um objeto a partir de uma classe, temos acesso direto a esses elementos.

class TudoPublico
{
    public $propriedade;

    public function metodo(){
        echo "metodo publico";
    }
}

$obj1 = new TudoPublico();
$obj1->propriedade = "a";
$obj1->metodo();


#PROTECTED
#um elemento protected pode ser alcançado dentro da classe
#e dentro de uma extensão que seja da mesma classe

class ClasseTeste
{
    public $publica = "a";
    protected $protegida = "b";
    private $privada = "c";
}

class ClasseDerivada extends ClasseTeste
{
    function teste()
    {
        echo $this->publica; #possivel
        echo $this->protegida; #possivel
        echo $this->privada; #erro
    }
}

$a = new ClasseTeste();
$a->publica = "1"; #possivel
$a->protegida = "2"; #erro
$a->privada = "3"; #erro

$b = new ClasseDerivada();
$b->publica = "a"; #possivel
$b->protegida = "b"; #erro
$b->privada = "c"; #erro


#PRIVATE
#só pode ser visivel dentro da propria classe.
#não é visivel nos objetos instanciados nem noutras classes herdadas.


#ao contrario das propriedades, os metodos não necessitam de ter um 
#nivel de acesso especificado claramente. Se não for identificado,
#por defeito o método é publico

class TestePrivate
{
    private $valor = "b";

    function mover()
    {
        echo $this-> valor; #possivel
    }
}

$a =  new TestePrivate();
$a->mover(); #possivel
$a->$valor = "a"; #impossivel
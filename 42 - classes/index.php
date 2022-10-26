<?php

#CLASSES - INTRODUÇÃO À (POO) - PROGRAMAÇÃO ORIENTADA A OBJETOS
 
# o corpo de uma classe contém PROPRIEDADES e MÉTODOS
#PROPRIEDADES - São variaveis que guardam as características do objeto.
#METODOS - são funções que definem o que o objeto pode fazer

#as propriedades são também como campos ou atributos de uma classe
#No php, as propriedades tem que ter um nível de acesso especificado

class figuraGeometrica
{
    public $largura, $altura;#\
    public $x;#                \ ATRIBUTOS 
    public $y;#                /

    function novaArea($a, $b)# \  METODOS
    {                         #/
        return $a * $b;#      /
    }
}

###################################################################




?>
<?php

#Para aceder as propriedades de uma classe, dentro dos métodos da classe
#é usada a pseudo variavel $this seguida do operador seta ->


class Humano1
{
    public $nome = 'jonata';
    public $sobrenome = 'horsth';

    public function nomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }

}

#INSTACIAR UM OBJETO

#Um objeto é uma variável criada a partir de uma classe.
#Instaciar um objeto significa criar um objeto a partir de uma classe
#atribuindo à variavel a expressão new e o nome da classe.

$homem = new Humano1();

echo $homem->nomeCompleto(); #acessando o método nomeCompleto

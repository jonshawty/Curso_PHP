<?php

#CONSTRUTOR

#o construtor é um metodo especial dentro de uma classe
# que é sempre executado automaticamento quando é criado um
#objeto a partir de uma classe. Este método é definido de uma forma
#especial com (__). São chamados de métodos magicos
#porque tem uma execução específica ou automática associada.

use Humano as GlobalHumano;

class Humano
{
    public $nome;
    public $sobrenome;

    function __construct($n, $s)
    {
        $this->nome = $n;
        $this->sobrenome = $s;
    }

    public function nomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }

}

$homem = new Humano('jonata', 'horsth');
$mulher = new GlobalHumano ('maria', 'clara');

echo $homem->nomeCompleto();
echo '<br>';
echo $mulher->nomeCompleto();
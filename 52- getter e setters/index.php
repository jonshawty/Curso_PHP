<?php

class Humano2
{
    private $idade = 0;

    public function setIdade($valor)
    {
        #verifica se o valor é numerico
        if(is_numeric($valor))
        {
            $this->idade = $valor;
        }
    }

    public function getIdade()
    {
        return $this->idade;
    }
}

$eu1 = new Humano2();
$eu1->setIdade(25);
echo $eu1->getIdade();

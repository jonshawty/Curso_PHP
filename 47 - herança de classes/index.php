<?php  

#HERANÇA

#a herança é o mecanismo através do qual podemos criar classes
#que herdam propriedades e métodos de outra classe.

#a classe inicial a partir da qual outras vão ser criadas, é designada por classe base

#todas as classes vão herdar propriedades e metodos da classe base
#são designadas por classes derivadas

#EXEMPLO (classe tradicional)

class Animal
{
    public $especie;
    public $peso;

    function tipoEspecie()
    {
        return "este animal é da especie {$this->especie}";
    }
}

$animal = new Animal();
$animal->especie = 'Mamiferos';

echo $animal->tipoEspecie();



################################################


#EXEMPLOS (herança)

class Animais
{
    public $especie;
    public $peso;

    function tipoEspecie()
    {
        return "Este animal é da especie {$this->especie}";
        
    }
}

class Mamifero extends Animais
{
    #não é necessario voltar a definir 
    #as propriedades e metodos que já existem na classe base
    #podemos acrescentar outras propriedades e outros metodos

    public $quantidade_pernas;
    public $tem_pelo;

    function temQuantasPernas()
    {
        echo '<br>';
        return "O animal da especie {$this->especie} tem {$this->quantidade_pernas} pernas";
    }
}

$mamifero = new Mamifero();
$mamifero->especie = 'Cavalo';
$mamifero->quantidade_pernas = 4;


echo $mamifero->temQuantasPernas();
<?php

#VAR KEYWORD

#tem o mesmo comportamento de public, mas apenas existe por retrocompatibilidade
#devido ao codigo escrito antes do PHP 5. Não é recomendavel usar porque podera
#em breve não será mais suportado


class Homem
{
    var $nome;
    var $apelido;
}

$eu = new Homem();
$eu->nome = "joao";
$eu->apelido = "Horsth";

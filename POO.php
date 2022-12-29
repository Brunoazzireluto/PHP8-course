<?php 

//Classes 

class Humano1 {
    public $nome = "Bruno";
    public $sobrenome = "Alves";

    public function NomeCompleto(){
        return $this->nome . " " . $this->sobrenome;
    }
}

//instanciando um objeto

$homem = new Humano1();

echo $homem->NomeCompleto();
echo "<br>";

//construtor

class Pessoa
{
    private $nome;
    private $sobrenome;

    function __construct($n, $s)
    {
        $this->nome = $n;
        $this->sobrenome = $s;
    }

    public function NomeCompleto(){
        return $this->nome . " " . $this->sobrenome;
    }
}

$eu = new Pessoa("Bruno", "Alves");

echo $eu->NomeCompleto();

class Humano2
{
    function __construct(public $nome, public $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }
}

$a = new Humano2("a", "b");

echo "<br>";

//Classes anonimas

$dd = new class
{
    function teste(){
        echo "teste classe anonima";
    }
};

$dd->teste();

//herança

class Animal
{
    public $especie;
    public $peso;

    function tipoEspecie(){
        return "Este animal é da Especie {$this->especie}";
    }
}



class Mamifero extends Animal
{
    public $quantidade_de_pernas;
    public $pelos;

    final function quantas_pernas(){
        return "O animal da Especie {$this->especie} tem {$this->quantidade_de_pernas}";
    }
}
//Podemos bloquear o override colocando um final na frente da função
echo "<br>";

$mamifero = new Mamifero();
$mamifero->especie = "Cavalo";
$mamifero->quantidade_de_pernas = 4;
echo $mamifero->quantas_pernas();

//parei na aula 50
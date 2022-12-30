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

    public $pub;
    protected $proct;
    private $priv;

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
echo "<br>";
//Diferenças entre private e protected

// $mamifero->proct; // a protected pode ser apresentada

//ja a private só pode ser acessada por aquela mesma classe


//static pode ser usada para declarar propriedades e metodos de uma calsse que podem ser acessados sem que seja
//necessario cria rum objeto a partir dessa classe

class operacoes
{
    static $valor1;
    static $valor2;

    static function add()
    {
        return self::$valor1 + self::$valor2;
    }
}

operacoes::$valor1 = 10;
operacoes::$valor2 = 20;
echo operacoes::add();
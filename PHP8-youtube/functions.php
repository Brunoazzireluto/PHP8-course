<?php

echo "Funções";
echo "<br>";
echo "<hr>";
executar();
echo "<br>";



function executar()
{
    echo "Executou a Função";
}

//paramentros das funções

function adicao($a, $b){
    echo $a + $b;
}

adicao(5, 4);
echo "<br>";
function adicionar($a,$b){
    echo "$a + $b = " . ($a + $b);
}

adicionar(8, 8);
echo "<br>";

$nomes = ["Bruno", "Ana", "Gustavo", 4];
foreach($nomes as $nome){
    saudacao($nome);
}

function saudacao( string $name){
    echo "Bom dia, $name. <br>";
}

//parametros opcionais
echo "<br>";
echo "<hr>";
echo "Paramentros Opcionais";
echo "<br>";


function multiplicar($a, $b =2){
    echo $a * $b;
}

multiplicar(2);
multiplicar(4, 4);
//Os parametros opcioinais tem que ser definidos após os paramentros Não Opcionais
echo "<br>";
echo "<hr>";
echo "Paramentros Nomeados";
echo "<br>";

function add($a, $b=10,$c=30){
    echo $a + $b + $c;
}

add(0, c: 25);
echo "<br>";
add(c: 205, a: 0);

//variadic parameter

echo "<br>";
echo "<hr>";
echo "variadic parameter";
echo "<br>";
function func(...$args){
    foreach($args as $v){
        echo "$v<br>";
    }
}

func(10, 20, 30, 45, 58, 90);

//funções anonimas
echo "<br>";
echo "<hr>";
echo "funções anonimas";
echo "<br>";

$a = function () {
    echo "<p>Olá</p>";
};

$a();
echo "<br>";

$falar = function ($mensagem) {
    echo "<p>$mensagem</p>";
};

$falar("test");

$a = function () {
    return "<p>Função A</p>";
};

function falar($x){
    echo $x;
}

falar($a());

//funções closures
echo "<br>";
echo "<hr>";
echo "funções closures";
echo "<br>";

$a = 20;
$b = 10;

$minha_closure = function ($z) use ($a, $b) {
    echo "$z, $b, $a"; 
    // quando usamo o yse só é permitido que a funçao saiba do x e do y mas não podemos alterar elas por aqui.
};

$minha_closure(5);

//Arrow functions
echo "<br>";
echo "<hr>";
echo "Arrow functions";
echo "<br>";

$minha_func = fn($z) => "$a + $b = $z";
//arrow functions captam as variaveis globais automaticamente
echo $minha_func(30);

//generators
echo "<br>";
echo "<hr>";
echo "generators";
echo "<br>";

function buscar_numero(){
    for($i = 0; $i < 10; $i++){
        yield $i; // funciona como um iterador
    }
}

foreach(buscar_numero() as $numero){
    echo "$numero<br>";
}
echo "<br>";

//yield from
function buscar_nomes(){
    yield "nome 1";
    yield "nome 2";
    yield from["nome 3", "nome 4"];
    yield "nome 5";
}


foreach(buscar_nomes() as $nome){
    echo "$nome<br>";
}
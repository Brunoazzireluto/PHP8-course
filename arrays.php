<?php

//há duas de se montar arrays Numericos

$valores = array(1,2,3,4,5);
$nomes = array("A", "B", "c"); 

$valores = [1,2,3,4,5];
$nomes = ["a", "b", "c", 5];

echo $valores[0];
echo "<br/>";
echo $nomes[1];

// arrays numericos não precisam ter chaves sequenciais

$saldo = [
    10 => 100,
    20 => 200,
    30 => 300
];

//Para adicionar valores no final d eum array usamos
$saldo[] = 400; // ele vai assumir a posição do ultimo elemento + 1

// mudando o valor de um item de um array
$valores[1] = 200;

//usando funçao para adiciar
array_push($valores, 5000);

// para apresentar valores de um array numa string
echo "<br>";
echo "Os valores dos array são $valores[0] e $valores[1]";
echo "<br>";

//arrays associativos

$dados = [
    "a" => 20,
    "b" => 30,
    "c" => 40];


//ou

$dados = [
    "nome" => "Bruno",
    "email" => "Bruno@email.com",
    "idade" => 24,
    "altura" => 1.88,
];
//como em um dict a chave Não se pode repetir

echo $dados["nome"];
echo "<br>";
echo $dados["idade"];
echo "<br>";
echo $dados["altura"];
echo "<br>";

//arrays Multidimensionais

$dados = [
    [10,11,12,13],
    [4,5,6,7,8]
];

echo $dados[1][4];
echo "<br>";
echo $dados[0][2];
echo "<br>";

$cidades = [
    "brasil" => ["São Paulo", "São bernado do campo"],
    "Portugal" => ["Lisboa", "Porto"]
];


echo $cidades["brasil"][1];
echo "<br>";
echo $cidades["Portugal"][0];
echo "<br>";











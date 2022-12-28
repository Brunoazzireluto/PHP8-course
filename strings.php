<?php

$a = "Isso é uma string";
echo $a;
echo "<br>";
$b = "Bruno"." "."Alves"." "."Concantenada"; //concanetar string
echo $b;
echo "<br>";
$c = "isso é uma String";
$d .=" "."concatenada usando o operador '.='";

echo $d;

echo "<br>";
 
//com aspas simples podemos fazer o seguinte
$nome = 'Bruno';
$apelido = 'Azzireluto';
$nome_completoAS = '$nome $apelido'; // -> nesse caso as variaveis Não são passadas pelas ''
echo $nome_completoAS;
echo "<br>";
$nome_completo = "$nome $apelido"; // -> nesse caso as variaveis são passadas pelas ""
echo $nome_completo;

echo "<br>";
echo "<hr>";
echo "<br>";
echo "HEREDOC e NOWDOC";
echo "<br>";

//Apesar de não serem comuns podemos usar para fazer tratameno de maiores blocos de texto

//HEREDOC permite fazer o parse de variaveis
$cliente = "Bruno alves";
$email = "Bruno@email.com";

$texto = <<<LABEL
olá sr. $cliente.
bla blablabla blabla bla blablabla blabla bla blablabla blabla
bla blablabla blabla bla blablabla blabla bla blablabla blabla
bla blablabla blabla bla blablabla blabla bla blablabla blabla
bla blablabla blabla bla blablabla Pelo Email $email.
LABEL;

echo $texto;

echo "<br>";
echo "<br>";

//NOWDOC Não permite o parse de variaveis
$texto = <<<'LABEL'
olá sr. $cliente.
bla blablabla blabla bla blablabla blabla bla blablabla blabla
bla blablabla blabla bla blablabla blabla bla blablabla blabla
bla blablabla blabla bla blablabla blabla bla blablabla blabla
bla blablabla blabla bla blablabla Pelo Email $email.
LABEL;

echo $texto;

// caracter de escape, terminal e html
echo "<br>";
echo "<br>";

echo "<p>Este é um paragrafo de HTML</p>";
echo "<br>";

echo "para usar o caracter de escape ou seja ' pode se usar aspas duplas ";
echo "<br>";

echo "I'm not sure jhon \"The Great\" will win this fight";
echo "<p>Para usar o escape usamo a  '\' na frente das aspas</p>";
echo "<br>";

// para mexer em um termninal 

echo "João Ribeiro \n\r teste";
echo "<br>";

//Escape unicode
echo "<br>";

echo "\u{A9}";
echo "<br>";
echo "\u{BC}";
echo "<br>";
echo "\u{AE}";
echo "<br>";

echo "<br>";

// HTML Entities
echo "&copy";
echo "<br>";
echo "&frac14";
echo "<br>";
echo "&reg";

// Funções de String
$frase = "Essa e uma frase";
echo "<br>";

echo $frase[0];
echo "<br>";

echo $frase[5]; // Mostra um caractere da string
echo "<br>";

// total de carecteres
$numero_string = strlen($frase);
echo $numero_string;
echo "<br>";

//Primeira palavra
$primeira_palavra = substr($frase, 0,4);
echo $primeira_palavra;
echo "<br>";

//Upper
$Upper = strtoupper($frase);
echo $Upper;
echo "<br>";

//lower
$lower = strtolower($frase);
echo $lower;
echo "<br>";

//subistituição
$sub = str_replace("a", "x", $frase);
echo $sub;
echo "<br>";

//acha a posição do caractere
$pos = strpos($frase, "a");
echo $pos;
echo "<br>";

//funções de procura

$nome = "Bruno Alves de Oliveira";

$x = str_contains($nome, "Bruno");
echo $x;
echo "<br>";

$x = str_starts_with($nome, "Bruno");
echo $x;
echo "<br>";

$x = str_ends_with($nome, "ira");
echo $x;
echo "<br>";
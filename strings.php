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

//Parei na Aula 18
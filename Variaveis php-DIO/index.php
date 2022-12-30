<?php

// $valoDia = 80;
// $gorjeta = 40;
// $diaria = $valoDia + $gorjeta;

// echo "Segunda-feira: $diaria \n";

// $gorjeta = 15;
// $diaria = $valoDia + $gorjeta;

// echo "Terça-feira: $diaria \n";

// //usando constantes

// define("Constant", "uma constante");
// echo Constant;

// //strings

// $s = "<h1>Texto H1</h1>";

// echo $s;


//ints

// $number = -10;
// $number2 = 10;

// var_dump($number);
// var_dump($number2);

//datas
date_default_timezone_set("America/Sao_Paulo");
$data =  date("d/m/Y H:i"); // i para Minutos?
echo $data;

// a função Print somente suporta uma string e na echo você pode pssar + 1 string

print "Exibe na tela \n";
echo "Exibe na tela \n", "Também exibe na tela";
<?php 

$varivael = 10; // operador de atribuição

$a = 4 + 5; // Adição
$s = 5 - 4; // Subtração
$m = 4 * 5; // Multiplicação
$d = 4 / 5; // Divisão
$md = 4 % 5; // Modulo = restante da divisão
$es = 4 ** 4;

echo $a;
echo "<br>";
echo $s;
echo "<br>";
echo $m;
echo "<br>";
echo $d;
echo "<br>";
echo $md;
echo "<br>";
echo $es;
echo "<br>";
echo "<hr>";
$b = $a + $s * $md;
echo $b;
echo "<br>";
$resultado = $b / $m;
echo $resultado;
echo "<br>";
echo "<hr>";
echo "<br>";

//Operadores de atribuição combinados
$a = $a += 5; // Adição
$s = $s -= 1; // Subtração
$m = $m *= 5; // Multiplicação
$d = $d /= 5;// Divisão

echo $a;
echo "<br>";
echo $s;
echo "<br>";
echo $m;
echo "<br>";
echo $d;
echo "<br>";
echo "<hr>";

// Operadores de Incremento e decremento
$a = 1;
$b = 5;
echo $a;
echo "<br>";
echo $b;
echo "<br>";

$a++;
$b--;
++$a;
--$b;
echo $a;
echo "<br>";
echo $b;
echo "<br>";

echo "<hr>";
echo "<br>";

echo "Operadores de Comparação";
echo "<br>";

$t = "Iguail a: ==";
echo $t;
echo "<br>";
$f = "Diferente de: !=";
echo $f;
$maior = "maior  >";
$menor = "menor: <";
$maiorque = "maior que: >=";
$menorque = "menor que: <=";

echo "<br>";
echo $maior;
echo "<br>";
echo $menor;
echo "<br>";
echo $maiorque;
echo "<br>";
echo $menorque;
echo "<br>";

$spaceship = "o Spaceship operator <=> verifica se os valores são iguais e devolve 0, se o da esquerda devolve 1 e se o valor da direita for maior devolve -1";
echo $spaceship;
echo "<br>";

$x = 1 <=> 1;
echo $x;
echo "<br>";

$x = 3 <=> 2;
echo $x;
echo "<br>";
$x = 1 <=> 2;
echo $x;
echo "<br>";

echo "Operadores Logicos";
echo "<br>";

$and = "AND:  &&";
$or = "OR: ||";
$not = "NOT: !";


echo "<br>";
echo $and;
echo "<br>";
echo $or;
echo "<br>";
echo $not;
echo "<br>";
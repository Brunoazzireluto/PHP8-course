<?php

//While
echo "While";
echo "<br/>";
$x = 1;
while ($x < 10){
    echo "Ciclo Wilhe N-$x";
    echo "<br/>";
    $x++;
}
echo "<br/>";
$i = 0;
while ($i < 10) {
    echo $i++.'<br/>';
}
echo "<br/>";
$i = 0;
while ($i < 10) echo $i++.'<br>';
echo "<br/>";

// Do while
echo "Do While";
echo "<br/>";

$x = 1;
$i = 0;

do {
    echo $x++.'<br>';
}while ($x < 10);
echo "<br/>";
do echo $i++."<br>"; while($i < 10);
echo "<hr/>";
echo "<br/>";
//For
echo "For";
echo "<br/>";
for ($x =1; $x <10; $x++){
    echo $x.'<br>';
}
echo "<br/>";
$nomes = ["Bruno ", "Alves ","de ", "Oliveira ", "feito no For"];
for($i =0; $i < sizeof($nomes); $i++){
    echo $nomes[$i];
}
echo "<br/>";
//Foreach
echo "foreach";
echo "<br/>";

$nomes = ['Bruno', "Alves", "Oliveira"];

foreach($nomes as $nome){
    echo $nome . "<br>";
}
echo "<br/>";

$capitais = [
    "Brasil" => "Brasilia",
    "Portugal" => "Lisboa",
    "Espanha" => "Madrid",
];

foreach($capitais as $key => $value){
    echo "Para o pais $key a capital é $value<br>";
}
echo "<hr/>";
echo "<br/>";
//break, continue, goto

echo "Break";
echo "<br/>";
for ($x =1; $x <20; $x++){
    echo $x.'<br>';
    if($x ==10){
        break;
    }
}
echo "<hr/>";
echo "<br/>";
echo "Continue";
echo "<br/>";
//o conintue pula um ciclo do loop
for ($x =1; $x <20; $x++){
    if($x ==10){
        continue;
    }
    echo $x.'<br>';
}

echo "<hr/>";
echo "<br/>";
echo "Goto";
echo "<br/>";

//o goto permite sair do loop  e ir para uma linha de codigo especifica

for ($x =1; $x <20; $x++){
    if($x ==10){
        goto teste;
    }
    echo $x.'<br>';
}
echo "Fim do loop";

teste: //-> lAbel para o loop
echo "Teste aqui";
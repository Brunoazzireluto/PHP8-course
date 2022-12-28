<?php 

$nome = "Bruno";
if($nome == "Bruno"){
    echo "O nome $nome está correto";
}

$idade = 24;
if($idade < 18){
    echo "Você é Menor de idade";
} else {
    echo "Você é Maior de idade";
}

$idade = 6;
if($idade  > 10 && $idade > 18){
    echo "Você é Menor de idade";
} elseif($idade < 10){
    echo "Você é uma criança";
} else {
    echo "Você é Maior de idade";
}

echo "<br>";
// switch

$nome = "Bruno";
switch ($nome){
    case "alves":
        echo "Não é Bruno";
        break;
    case "Oliveira":
        echo "Não é Bruno";
        break;
    default:
        echo "é Bruno";
        break;
}

echo "<br>";

//sintaxe alternativa para if e switch

if($idade < 18):
    echo "Você é Menor de idade";
else:
    echo "Você é Maior de idade";
endif;
echo "<br>";

switch ($nome):
    case "alves":
        echo "Não é Bruno";
        break;
    case "Oliveira":
        echo "Não é Bruno";
        break;
    default:
        echo "é Bruno";
        break;
endswitch;

//podemos fazer dentro do html da seguinte maneira
echo "<br>";
echo "<br>";

?>

<?php if(true): ?>
    <div>Execute este codigo html</div>
<?php  else: ?>
    <h3>Se Não utiliza esse</h3>
<?php endif; ?>

<?php
//Operador Tenario

$opcao = 0;

$nome = $opcao == 1 ? "Bruno" : "Azzireluto";

echo $nome;

// com html e para controlar propriedades do html
?>
<br>

<h2> <?= $opcao ==1 ? "Sim" : "Não"  ?> </h2>


<h2 style="color: <?= $opcao ? "red" : "blue" ?>" > Este Texto tem cor defininda pelo php </h2>

<?php 

//Match
echo match($nome) {
    "alves" => "Não é Bruno",
    "Oliveira" => "Não é Bruno",
    default =>  "é Bruno"
};
// o match usa um comparado byte a byte ou seja '==='
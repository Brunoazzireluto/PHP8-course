<?php

$categorias = [];
$categorias[] = "Infantil";
$categorias[] = "Adolescente";
$categorias[] = "Adulto";

// print_r($categorias);

$nome = "Bruno";
$idade = 24;

// var_dump($nome);
// var_dump($idade);

if($idade >=6 && $idade <=12){
    for ($i =0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "Infantil")
            echo 'O Nadador '.$nome.'compete na categoria infantil';
    }
}elseif ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "Adolescente")
        {
            echo "O Nadador $nome compete na categoria Adolescente";
        }
    }
}else{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == "Adulto")
        {
            echo "O Nadador $nome compete na categoria Adulto";
        }
    }
}



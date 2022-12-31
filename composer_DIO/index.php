<?php

require __DIR__ . "/vendor/autoload.php";

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world do composer e do Mpdf!</h1>');
$mpdf->Output();

//comandos Composer

// composer require vendor/package -> Instala o pacote no diretório atual
// composer install -> Quando baixamos um projeto podemos usar o comando install para instalar os pacotes
// compose update -> atualiza nos pacotes
// composer remove vendor/package -> desinstala um pacote 
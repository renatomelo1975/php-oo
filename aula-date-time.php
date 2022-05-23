<?php

$data = new DateTime();

/**
//Comando sem atributos
var_dump($data) . "<br>";

//Comando com paramatros simples
echo $data->format('d-m-y') . "<br>";

//Comando com paramatros simples ano 4 digitos
echo $data->format('d-m-Y') . "<br>";

//Comando com paramatros data e hora
echo $data->format('d-m-Y H:i:s') . "<br>"; */

//Trabalhando funções de DateTime
//Adiciona função add e subrair função sub

echo 'A data atual é: ' . $data->format('d-m-Y') . ' e a hora atual é: ' .
$data->format('h:m:s') . "<br>";

"<br>";

$intervalo = new DateInterval('P5DT10H50M');

$data->sub($intervalo);

echo $data->format('d/m/Y - H:i:s');
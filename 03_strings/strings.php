<?php

$umaString = 'Valor que estiver entre aspas duplas ou simples é string';

$contarCaracteres = mb_strlen($umaString);
$substring = mb_substr($umaString, 18);
// $contem = str_contains($umaString, 'aspas'); a partir da versão 8;

$aspas = 'unindo';
$concatenar = 'Estou ' . $aspas . ' texto e variável com aspas SIMPLES';
$interpolar = "Estou $aspas texto e variável com aspas DUPLAS";

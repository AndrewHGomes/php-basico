<?php

// STRINGS:

$umaString = 'Valor que estiver entre aspas duplas ou simples é string';

$outraString = "É Um Conjunto De Caracteres";

// Concatenação:

$texto = 'A variável $texto recebeu este valor';

$aspas = 'concatenando';

$concatenar = 'Estou ' . $aspas . ' texto e variável com aspas SIMPLES';

$nome = 'Andrew';
$sobrenome = 'Gomes';

// Interpolação:

$aspas = 'interpolando';

$interpolar = "Estou $aspas texto e variável com aspas DUPLAS";

// Métodos:

$especifico = $umaString[28];
$contarCaracteres = mb_strlen($umaString);
$substring = mb_substr($umaString, 18);
$contem = mb_strpos($umaString, 'entre');
$maiusculas = mb_strtoupper($umaString);
$minusculas = mb_strtolower($outraString);
// $contem = str_contains($umaString, 'entre'); // a partir da versão 8;

<?php

// STRINGS:

$umaString = 'Valor que estiver entre aspas duplas ou simples é string';

// Concatenação:

$texto = 'A variável $texto recebeu este valor';

$aspas = 'concatenando';

$concatenar = 'Estou ' . $aspas . ' texto e variável com aspas SIMPLES';

// Interpolação:

$aspas = 'interpolando';

$interpolar = "Estou $aspas texto e variável com aspas DUPLAS";

// Métodos:

$contarCaracteres = mb_strlen($umaString);
$substring = mb_substr($umaString, 18);
$contem = mb_strpos($umaString, 'entre');
// $contem = str_contains($umaString, 'entre'); // a partir da versão 8;

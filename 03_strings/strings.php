<?php

// STRINGS:

$umaString = 'Valor Que Estiver Entre Aspas Duplas Ou Simples é String';

// Concatenação:

$texto = 'A variável $texto recebeu este valor';

$aspas = 'concatenando';

$concatenar = 'Estou ' . $aspas . ' texto e variável com aspas SIMPLES';

// Interpolação:

$aspas = 'interpolando';

$interpolar = "Estou $aspas texto e variável com aspas DUPLAS";

// Métodos:

$contarCaracteres = mb_strlen($umaString);

$elementoPorIndice = $umaString[10];

$substring = mb_substr($umaString, 18);

$contem = mb_strpos($umaString, 'entre');

$maiusculas = mb_strtoupper($umaString);

$minusculas = mb_strtolower($umaString);

$trocar = str_replace('String', 'Texto', $umaString);

// $contem = str_contains($umaString, 'entre'); // a partir da versão 8;

// $comecaCom = str_starts_with($umaString, 'Valor') ? 'Sim' : 'Não'; // a partir da versão 8;

// $terminaCom = str_ends_with($umaString, 'String') ? 'Sim' : 'Não'; // a partir da versão 8;

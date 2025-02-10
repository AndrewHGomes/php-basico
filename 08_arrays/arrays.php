<?php

// ARRAYS:
$numeros = [1, 2, 3, 4];

$indice2 = $numeros[2];

// Associativo:

$pessoa = ['nome' => 'Andrew', 'sobrenome' => 'Gomes', 'idade' => 36];

$indiceIdade = $pessoa['idade'];

// Verificar se array é Null:

$teste = [11, 12, 13];

$verificar = isset($teste[0]) ? 'Existe' : 'Não existe';

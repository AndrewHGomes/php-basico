<?php

// VARIÁVEIS:

$variavel = 'Variável qualquer';

$outraVariavel = 'Outra variável';


// CONSTANTES:

define('CONSTANTE', 'Valor não pode ser alterado');

const OUTRA_CONSTANTE = 'Definida com const';

// Verificar se uma variável é null:

$teste = 'Andrew';

$verificar = isset($teste) ? 'Existe' : 'Não existe';


// Case:

$SOBRENOME = 'Rodrigues';
$sobrenome = 'Gomes';

$camelCase = 'camelCase';
$snake_case = 'snake_case';
$PascalCase = 'PascalCase';

// ISSET | NULL | EMPTY | IS_NULL:

$teste1 = 'Teste';

if (isset($teste1)) {
  $testeIsset = "A variável existe!";
} else {
  $testeIsset = "A variável não existe!";
}

$teste2 = null;

if (isset($teste2)) {
  $issetNull = "A variável não é nula!";
} else {
  $issetNull = "A variável é nula!";
}

$teste3 = 'algo';

if (empty($teste3)) {
  $testeEmpty = "A variável tem valor falsy!";
} else {
  $testeEmpty = "A variável tem valor truthy!";
}

$teste4 = null;

if (is_null($teste4)) {
  $testeIsNull = "A variável é nula";
} else {
  $testeIsNull = "A variável não é nula";
}

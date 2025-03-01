<?php
// FUNÇÕES:

// Simples:
function simpleFunction()
{
  echo "Olá, funcão!";
}


// Parâmetros ou Argumentos:
function withParam($param)
{
  echo "Meu $param";
}

function fazerSoma($a, $b)
{
  echo "$a + $b = " . $a + $b;
}

// Parâmetro Padrão ou Opcional:
function defaultParam($arg = 'valor padrão')
{
  echo "Usando $arg";
}

function dizerNome($nome = 'Usuário')
{
  echo "Olá, $nome!";
}

// Variadic Parameter:

function variosParametros(...$argumentos)
{
  foreach ($argumentos as $argumento) {
    echo "$argumento ";
  }
}

// Retorno:

function withReturn()
{
  return "Este é o retorno";
}

$meuRetorno = withReturn();

function somar($a, $b)
{
  $soma = $a + $b;
  return "$a + $b = $soma";
}

function subtrair($a, $b)
{
  $subtracao = $a - $b;
  return "$a - $b = $subtracao";
}

// Função Anônima/Closure:

$anonima = function () {
  return "Sou uma função anônima...";
};

$closure = function ($arg) {
  return "Sou uma $arg";
};

// Callback:

function callback($nome)
{
  return "Olá! Sou $nome";
}

function testeCallback($fn)
{
  if (is_callable($fn)) {
    return $fn('Andrew');
  }
}

// Arrow Functions:

$minhaArrow = fn($parametro) => "Minha $parametro";

$x = 10;
$y = 20;

$testArrowFunction = fn($z) => "Somando $x + $y + $z = " . $x + $y + $z;

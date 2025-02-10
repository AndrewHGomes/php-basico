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

// Parâmetro Padrão ou Opcional:
function defaultParam($arg = 'valor padrão')
{
  echo "Usando $arg";
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

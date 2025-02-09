<?php

// CONDICIONAIS:

// if | elseif | else:
$num = 5;
$resposta = '';

if ($num < 5) {
  $resposta = "Número é menor que 5";
} elseif ($num === 5) {
  $resposta = "Número é igual a 5";
} else {
  $resposta = "Número é maior que 5";
}

$nomeSobrenome = 'Viviane Rodrigues';
$resultado = '';

if ($nomeSobrenome === 'Andrew Gomes') {
  $resultado = 'Nome é Andrew Gomes';
} else if ($nomeSobrenome === 'Viviane Rodrigues') {
  $resultado = 'Nome é Viviane Rodrigues';
} else {
  $resultado = 'Nenhum dos testes acima';
}

// switch | case:
$paisOrigem = 'Brasil';
$nacionalidade = '';

switch ($paisOrigem) {
  case 'Brasil':
    $nacionalidade = 'Brasileiro';
    break;
  case 'EUA':
    $nacionalidade = 'Norte Americano';
    break;
  case 'Austrália':
    $nacionalidade = 'Australiano';
    break;
  case 'Russia':
    $nacionalidade = 'Russo';
    break;
  default:
    $nacionalidade = 'Nenhum dos valores acima';
    break;
}

$linguagem = 'Python';
$framework = '';

switch ($linguagem) {
  case 'JavaScript':
    $framework = 'React';
    break;
  case 'PHP':
    $framework = 'Laravel';
    break;
  case 'Python':
    $framework = 'Flask';
    break;
  case 'Java':
    $framework = 'Spring';
    break;
  default:
    $framework = 'Não lembro de nenhum framework desta linguagem';
    break;
}

// Ternário:
$saberLinguagem = $linguagem === 'JavaScript' ? 'Amo JS' : 'Fazer o que, né?';

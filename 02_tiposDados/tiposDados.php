<?php
// TIPOS DE DADOS:

// Tipos Básicos ou Escaláres:
$string = "Valores entre aspas simples ou duplas são string. São consideradas texto";
$int = 50;
$float = 2.5;
$verdadeiro = true;
$falso = false;

// Tipos Compostos:
$numerico = [1, 2, 3, 4];
$associativo = ["1º valor" => 1, "2º valor" => 2, "3º valor" => 3];

class Classe {}
$objeto = new Classe;

// Tipos Especiais:
$nulo = null;

// Mudanças de tipos:
$variavelParaTestar = 'algum valor';

$mudarTipo = (bool) $variavelParaTestar;

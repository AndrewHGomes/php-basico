<?php

// REPETIÇÕES:

// For:

$loopFor = '';

for ($i = 0; $i <= 5; $i++) {
  $loopFor .= "$i, ";
}

// While:

$loopWhile = '';
$w = 0;

while ($w <= 5) {
  $loopWhile .= "$w, ";
  $w++;
}

// Do While:

$loopDoWhile = '';
$dw = 0;

do {
  $loopDoWhile .= "$dw, ";
  $dw++;
} while ($dw <= 5);

// Foreach:

$nomes = ['Andrew', 'Viviane', 'Janico', 'Cleusa'];

$loopForEach = '';

foreach ($nomes as $key => $nome) {
  $loopForEach .= "$key => $nome | ";
}

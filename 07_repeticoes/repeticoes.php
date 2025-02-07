<?php

// REPETIÇÕES:

//While:
$w = 0;
echo "<strong>Loop while:</strong>";

echo "<br/>";

while ($w <= 3) {
  echo "<span>$w </span>";
  $w++;
}

echo "<br/>";

// Do While:
$dw = 0;
echo "<strong>Loop do while:</strong>";

echo "<br/>";

do {
  echo " $dw - ";
  $dw++;
} while ($dw <= 3);

echo "<br/>";

// For:
echo "<strong>Loop do for:</strong>";

echo "<br/>";

for ($i = 0; $i <= 3; $i++) {
  echo " $i - ";
}

echo "<br/>";

// Foreach:
$nomes = array("Andrew", "Viviane", "Janico", "Cleusa");
echo "<strong>Loop foreach:</strong>";

echo "<br/>";

foreach ($nomes as $key => $nome) {
  echo $key + 1 . "º: " . $nome . " | ";
}

echo "<br/>";

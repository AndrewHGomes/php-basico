<?php
include_once './numbers.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Numbers</title>
</head>

<body>
  <header>
    <h1>Numbers</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>Integer</h2>

      <p><?= $inteiro1 ?> | <?= gettype($inteiro1) ?> | <?= var_dump($inteiro1) ?></p>
      <p><?= $inteiro2 ?> | <?= gettype($inteiro2) ?> | <?= var_dump($inteiro2) ?></p>
    </section>
    <hr>
    <section>
      <h2>Float/Double</h2>

      <p><?= $real1 ?> | <?= gettype($real1) ?> | <?= var_dump($real1) ?></p>
      <p><?= $real2 ?> | <?= gettype($real2) ?> | <?= var_dump($real2) ?></p>
    </section>
    <hr>
    <section>
      <h2>String/Number</h2>

      <p><?= $strNum ?> | <?= gettype($strNum) ?> | <?= var_dump($strNum) ?></p>
    </section>
    <hr>
    <section>
      <h2>Métodos</h2>

      <p><?= $strNum ?> é um número? <?= $verificarNum ?></p>
      <p>Arredondar para cima: <?= $real2 ?> | <?= $arredondarParaCima ?></p>
      <p>Arredondar para baixo: <?= $real2 ?> | <?= $arredondarParaBaixo ?></p>
    </section>
  </main>
</body>

</html>
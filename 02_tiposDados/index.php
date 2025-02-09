<?php
include_once './tiposDados.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de Dados</title>
</head>

<body>
  <header>
    <h1>Tipos de Dados</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>Strings</h2>

      <p><?= $string ?> | <?= gettype($string) ?></p>
    </section>
    <hr>
    <section>
      <h2>Numbers</h2>

      <p>Inteiros: <?= $int ?> | <?= gettype($int) ?></p>
      <p></p>
      <p>Reais: <?= $float ?> | <?= gettype($float) ?></p>
    </section>
    <hr>
    <section>
      <h2>Booleans</h2>

      <p>Verdadeiro: <?= var_dump($verdadeiro) ?> | <?= gettype($verdadeiro) ?></p>
      <p>Falso: <?= var_dump($falso) ?> | <?= gettype($falso) ?></p>
    </section>
    <hr>
    <section>
      <h2>Arrays</h2>

      <p>var_dump de um array: <?= var_dump($numerico) ?> | <?= gettype($numerico) ?></p>
      <p>print_r de um array: <?= print_r($associativo) ?> | <?= gettype($associativo) ?></p>
    </section>
    <hr>
    <section>
      <h2>Objects</h2>

      <p><?= print_r($objeto) ?> | <?= gettype($objeto) ?></p>
    </section>
    <hr>
    <section>
      <h2>Null</h2>

      <p>echo de um valor nulo: <?= $nulo ?></p>
      <p>var_dump de um valor nulo: <?= var_dump($nulo) ?></p>
    </section>
  </main>
</body>

</html>
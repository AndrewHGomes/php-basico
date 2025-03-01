<?php
include_once 'booleans.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booleans</title>
</head>

<body>
  <header>
    <h1>Booleans</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>Puros</h2>

      <p>True: <?= $sim ?> | <?= var_dump($sim) ?> | <?= gettype($sim) ?></p>

      <p>False: <?= $nao ?> | <?= var_dump($nao) ?> | <?= gettype($nao) ?></p>
    </section>
    <hr>
    <section>
      <h2>Truthy and Falsy</h2>

      <p>Variável com valor atribuído: <?= var_dump($text) ?> | <?= !!$text ?> | <?= var_dump(!!$text) ?></p>
      <?php
      $text = '';
      ?>
      <p>Variável vazia: <?= var_dump($text) ?> | <?= !!$text ?> | <?= var_dump(!!$text) ?></p>
      <?php
      $text = 0;
      ?>
      <p>Variável atribuída com zero: <?= var_dump($text) ?> | <?= !!$text ?> | <?= var_dump(!!$text) ?></p>
      <?php
      $text = null;
      ?>
      <p>Variável atribuída com null: <?= var_dump($text) ?> | <?= !!$text ?> | <?= var_dump(!!$text) ?></p>
      <?php
      $text = [];
      ?>
      <p>Variável atribuída com array vazio: <?= var_dump($text) ?> | <?= !!$text ?> | <?= var_dump(!!$text) ?></p>
    </section>
    <hr>
    <section>
      <h2>Verificação</h2>
      <p>Resposta: <?= var_dump($resposta) ?></p>
      <p>Resposta é verdadeira? <?= $verificacao ?></p>
    </section>
  </main>
</body>

</html>
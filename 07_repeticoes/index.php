<?php
include_once './repeticoes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Repetições</title>
</head>

<body>
  <header>
    <h1>Repetições</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>For</h2>

      <p><?= $loopFor ?></p>

      <strong>Continue</strong>

      <?php
      $loopFor = '';

      for ($i = 0; $i <= 10; $i++) {
        if ($i === 6) {
          $loopFor .= 'Seis, ';
          continue;
        }
        $loopFor .= "$i, ";
      }
      ?>
      <p><?= $loopFor ?></p>

      <strong>Break</strong>

      <?php
      $loopFor = '';

      for ($i = 0; $i <= 10; $i++) {
        if ($i === 8) {
          $loopFor .= 'Parou!';
          break;
        }
        $loopFor .= "$i, ";
      }
      ?>
      <p><?= $loopFor ?></p>
    </section>
    <hr>
    <section>
      <h2>While</h2>

      <p><?= $loopWhile ?></p>
    </section>
    <hr>
    <section>
      <h2>Do While</h2>

      <p><?= $loopDoWhile ?></p>
    </section>
    <hr>
    <section>
      <h2>Foreach</h2>

      <p><?= $loopForEach ?></p>
    </section>

    <strong>Continue</strong>

    <?php
    $loopForEach = '';

    foreach ($nomes as $key => $nome) {
      if ($nome === 'Janico') {
        continue;
      }
      $loopForEach .= "$key => $nome | ";
    }
    ?>
    <p><?= $loopForEach ?></p>

    <strong>Break</strong>

    <?php
    $loopForEach = '';

    foreach ($nomes as $key => $nome) {
      if ($nome === 'Cleusa') {
        break;
      }
      $loopForEach .= "$key => $nome | ";
    }
    ?>
    <p><?= $loopForEach ?></p>
  </main>
</body>

</html>
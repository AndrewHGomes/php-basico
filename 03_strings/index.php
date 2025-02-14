<?php
include_once './strings.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Strings</title>
</head>

<body>
  <header>
    <h1>Strings</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>String</h2>

      <p><?= $umaString ?></p>
      <p><?= $outraString ?></p>

      <p>Tipo de $umaString: <?= gettype($umaString) ?> | Tipo de $outraString: <?= gettype($umaString) ?></p>
    </section>
    <hr>
    <section>
      <h2>Concatenação</h2>

      <p><?= $texto ?></p>
      <?php
      $texto .= ', depois recebeu mais este valor';
      ?>
      <p><?= $texto ?></p>

      <p><?= $concatenar ?></p>

      <?php
      $nomeCompleto = $nome . ' ' . $sobrenome;
      ?>
      <p>Concatenado entre aspas simples: <?= $nomeCompleto ?></p>
    </section>
    <hr>
    <section>
      <h2>Interpolação</h2>

      <p><?= $interpolar ?></p>

      <?php
      $nomeCompleto = "$nome $sobrenome";
      ?>
      <p>Interpolado entre aspas duplas: <?= $nomeCompleto ?></p>
    </section>
    <hr>
    <section>
      <h2>Métodos</h2>

      <p>Caracter específico: <?= $especifico ?></p>

      <p>Contagem de caracteres de $umaString: <?= $contarCaracteres ?> caracteres</p>

      <p>Substring/parte de uma string: <?= $substring ?></p>

      <p>Se a string tem uma parte específica: <?= $contem ?> | <?= $contem ? 'True' : 'False' ?></p>

      <p>Todas maiúsculas: <?= $maiusculas ?></p>

      <p>Todas minúsculas: <?= $minusculas ?></p>
    </section>
  </main>
</body>

</html>
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
      <p>Tipo de $umaString: <?= gettype($umaString) ?></p>
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
    </section>
    <hr>
    <section>
      <h2>Interpolação</h2>

      <p><?= $interpolar ?></p>
    </section>
    <hr>
    <section>
      <h2>Métodos</h2>

      <p>Contagem de caracteres de $umaString: <?= $contarCaracteres ?> caracteres</p>

      <p>Elemento por índice: <?= $elementoPorIndice ?></p>

      <p>Substring/parte de uma string: <?= $substring ?></p>

      <p>Se a string tem uma parte específica: <?= $contem ?> | <?= $contem ? 'True' : 'False' ?></p>

      <p>Letras maiúsculas: <?= $maiusculas ?></p>

      <p>Letras minúsculas: <?= $minusculas ?></p>

      <p>Trocar parte da string: <?= $trocar ?></p>

      <!-- <p>Começa com 'Valor'? <?= $comecaCom ?></p> -->

      <!-- <p>Termina com 'String'? <?= $terminaCom ?></p> -->
    </section>
  </main>
</body>

</html>
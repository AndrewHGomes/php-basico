<?php
include_once 'variaveis.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis e Constantes</title>
</head>

<body>
  <header>
    <h1>Variáveis e Constantes</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>Variáveis</h2>

      <p><?= $variavel ?> | <?= var_dump($variavel) ?></p>
      <p><?= $outraVariavel ?> | <?= var_dump($outraVariavel) ?></p>

      <?php
      $variavel = 'Mudando o valor';
      $outraVariavel = 'Também foi modificada';
      ?>

      <p><?= $variavel ?> | <?= var_dump($variavel) ?></p>
      <p><?= $outraVariavel ?> | <?= var_dump($outraVariavel) ?></p>
    </section>
    <hr>
    <section>
      <h2>Constantes</h2>

      <p><?= CONSTANTE ?> | <?= var_dump(CONSTANTE) ?></p>
      <p><?= OUTRA_CONSTANTE ?> | <?= var_dump(OUTRA_CONSTANTE) ?></p>
    </section>
    <hr>
    <section>
      <h2>Verificar se a variável é Null</h2>

      <p>Variável de teste: <?= var_dump($teste) ?></p>
      <p>Verificação: <?= $verificar ?></p>
    </section>
  </main>
</body>

</html>
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
      <h2>Variáveis são Case Sensitive</h2>

      <p>Variável $SOBRENOME: <?= $SOBRENOME ?></p>
      <p>Variável $sobrenome: <?= $sobrenome ?></p>

      <p><?= $camelCase ?></p>
      <p><?= $snake_case ?></p>
      <p><?= $PascalCase ?></p>
    </section>
    <hr>
    <section>
      <h2>Testes em variáveis (truthy e falsy)</h2>

      <p><?= var_dump($teste1) ?></p>
      <p><?= $testeIsset ?></p>

      <p><?= var_dump($teste2) ?></p>
      <p><?= $issetNull ?></p>

      <p><?= var_dump($teste3) ?></p>
      <p><?= $testeEmpty ?></p>

      <p><?= var_dump($teste4) ?></p>
      <p><?= $testeIsNull ?></p>
    </section>
  </main>
</body>

</html>
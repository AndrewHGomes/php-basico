<?php
include_once './arrays.php'
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>

<body>
  <header>
    <h1>Arrays</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>Criando um array</h2>

      <p>Lista: <?= var_dump($meuArray) ?> | Tipo: <?= gettype($meuArray) ?></p>

      <p>Índice 2: <?= $indice2 ?></p>

      <?php
      $meuArray[4] = 12;
      ?>
      <p>Inserindo elemento: <?= var_dump($meuArray) ?></p>
    </section>
    <hr>
    <section>
      <h2>Associativo</h2>

      <p>Lista: <?= var_dump($associativo) ?> | Tipo: <?= gettype($associativo) ?></p>

      <p>Índice idade: <?= $indiceIdade ?></p>

      <?php
      $associativo['profissao'] = 'Desenvolvedor Web';
      ?>
      <p>Inserindo elemento: <?= var_dump($associativo) ?></p>
    </section>
    <hr>
    <section>
      <h2>Métodos</h2>

      <?php
      $adicionarFim = array_push($meuArray, 15);
      $adicionarInicio = array_unshift($associativo, 'teste');
      $quantidadeMeuArray = count($meuArray);
      $quantidadeAssociativo = count($associativo);
      ?>
      <p>Quantidade de elementos de $meuArray: <?= $quantidadeMeuArray ?></p>
      <p>Quantidade de elementos de $associativo: <?= $quantidadeAssociativo ?></p>

      <p><?= var_dump($meuArray) ?></p>
      <p><?= var_dump($associativo) ?></p>
    </section>
  </main>
</body>

</html>
<?php
include_once 'arrays.php'
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

      <p>Lista: <?= var_dump($numeros) ?> | Tipo: <?= gettype($numeros) ?></p>

      <p>Índice 2: <?= $indice2 ?></p>

      <?php
      $numeros[4] = 12;
      ?>
      <p>Inserindo elemento: <?= var_dump($numeros) ?></p>

      <?php
      $mudandoNumeros = $numeros[0] = 100;
      ?>
      <p>Mudando um elemento: <?= var_dump($numeros) ?></p>
    </section>
    <hr>
    <section>
      <h2>Associativo</h2>

      <p>Lista: <?= var_dump($pessoa) ?> | Tipo: <?= gettype($pessoa) ?></p>

      <p>Índice idade: <?= $indiceIdade ?></p>

      <?php
      $pessoa['profissao'] = 'Desenvolvedor Web';
      ?>
      <p>Inserindo elemento: <?= var_dump($pessoa) ?></p>

      <?php
      $mudandoPessoa = $pessoa['nome'] = 'Henrique';
      ?>
      <p>Mudando um elemento: <?= var_dump($pessoa) ?></p>
    </section>
    <hr>
    <section>
      <h2>Métodos</h2>

      <?php
      $adicionarFim = array_push($numeros, 15);
      $adicionarInicio = array_unshift($pessoa, 'teste');
      $quantidadeNumeros = count($numeros);
      $quantidadePessoa = count($pessoa);
      ?>
      <p>Quantidade de elementos de $numeros: <?= $quantidadeNumeros ?></p>
      <p>Quantidade de elementos de $pessoa: <?= $quantidadePessoa ?></p>

      <p><?= var_dump($numeros) ?></p>
      <p><?= var_dump($pessoa) ?></p>
    </section>
    <hr>
    <section>
      <h2>Verificar se array é Null</h2>

      <p>Valor do array: <?= var_dump($teste) ?></p>
      <p>Verificação: <?= $verificar ?></p>
    </section>
  </main>
</body>

</html>
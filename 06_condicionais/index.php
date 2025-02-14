<?php
include_once './condicionais.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionais</title>
</head>

<body>
  <header>
    <h1>Condicionais</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>if | elseif | else</h2>

      <p>Número: <?= $num ?></p>
      <p>Resposta: <?= $resposta ?></p>

      <p>Nome: <?= $nomeSobrenome ?></p>
      <p>Resultado: <?= $resultado ?></p>
    </section>
    <hr>
    <section>
      <h2>Switch | Case</h2>

      <p>País de origem: <?= $paisOrigem ?></p>
      <p>Nacionalidade: <?= $nacionalidade ?></p>

      <p>Linguagem de programação: <?= $linguagem ?></p>
      <p>Framework mais conhecido: <?= $framework ?></p>
    </section>
    <hr>
    <section>
      <h2>Ternário</h2>

      <p>Linguagem de programação: <?= $linguagem ?></p>
      <p>O que acha sobre ela: <?= $saberLinguagem ?></p>

      <p>Opção: <?= $opcao ?> | Situação: <?= $situacao ?></p>
    </section>
    <hr>
    <section>
      <h2>Match</h2>

      <p>Escolha: <?= $escolha ?> | Livro: <?= $livro ?></p>
    </section>
  </main>
</body>

</html>
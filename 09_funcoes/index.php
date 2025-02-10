<?php
include_once './funcoes.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Funções</title>
</head>

<body>
  <header>
    <h1>Funções</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>Declaração simples</h2>

      <p><?= simpleFunction() ?></p>
    </section>
    <hr>
    <section>
      <h2>Recebendo parâmetros</h2>

      <p><?= withParam('argumento') ?></p>
      <p><?= withParam('parâmetro') ?></p>
    </section>
    <hr>
    <section>
      <h2>Parâmetro padrão</h2>

      <p><?= defaultParam('meu argumento') ?></p>
      <p><?= defaultParam('meu parâmetro') ?></p>
      <p><?= defaultParam() ?></p>
    </section>
    <hr>
    <section>
      <h2>Retorno</h2>

      <p><?= withReturn() ?></p>

      <p><?= somar(35, 21) ?></p>

      <p><?= subtrair(35, 21) ?></p>
    </section>
    <hr>
    <section>
      <h2>Função Anônima/Closure</h2>

      <p><?= $anonima() ?> | <?= var_dump($anonima) ?> | <?= gettype($anonima) ?></p>
      <p><?= $closure('closure') ?> | <?= print_r($closure) ?> | <?= gettype($closure) ?></p>
    </section>
    <hr>
    <section>
      <h2>Callback</h2>

      <p><?= callback('Henrique') ?></p>
      <p><?= testeCallback('callback') ?></p>
    </section>
  </main>
</body>

</html>
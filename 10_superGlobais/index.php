<?php
include './superGlobais.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Super Globais</title>
</head>

<body>
  <header>
    <h1>Super Globais</h1>
  </header>
  <hr>
  <main>
    <section>
      <h2>$_COOKIE</h2>

      <p><?= $cookieNome ?> | <?= $cookieSobrenome ?></p>
    </section>
    <hr>
    <section>
      <h2>$_SESSION</h2>
    </section>
    <hr>
    <section>
      <h2>$_ENV</h2>
    </section>
    <hr>
    <section>
      <h2>$_FILES</h2>
    </section>
    <hr>
    <section>
      <h2>$_GET</h2>
    </section>
    <hr>
    <section>
      <h2>$_POST</h2>
    </section>
    <hr>
    <section>
      <h2>$_REQUEST</h2>
    </section>
    <hr>
    <section>
      <h2>$_SERVER</h2>
    </section>
  </main>
</body>

</html>
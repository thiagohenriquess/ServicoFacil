<?php
echo'
<!DOCTYPE html>
  <html>
    <head>
      <meta charset="UTF-8">
      <title>Servico Fácil</title>
      <link rel="StyleSheet" type="text/css" href="css/reset.css">
      <link rel="StyleSheet" type="text/css" href="css/bootstrap.css">
      <link rel="StyleSheet" type="text/css" href="css/style.css">
    </head>
    <body>
      <header id="titulo">
        <a href="/painel.php">
          <img src="/imagens/icone.png" width="100" height="100">
        </a>
        <div class="logout">';
        session_start();
        echo $_SESSION['login'];
        echo '<br>
        <a href="/php/logout.php">Logout</a>
        </div>
      </header>';
 ?>

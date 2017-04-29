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
      <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
      <script type="text/javascript" src="js/funcao.js"></script>
    </head>
    <body>
      <header id="titulo">
        <a href="/painel.php">
          <img src="/imagens/icone.png" width="100" height="100">
        </a>
        <div class="logout">';
        session_start();
        if (isset($_SESSION['nome'])){
        echo $_SESSION['nome'];
        }
        echo '<br>
        <a href="/php/logout.php">Logout</a>
        </div>
      </header>';
 ?>

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
        Serviço Fácil
        <div class="logout">';
        session_start();
        echo $_SESSION['login'];
        echo '<br>
        <a href="logout.php">Logout</a>
        </div>
      </header>';
 ?>

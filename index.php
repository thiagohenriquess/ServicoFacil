<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>T1</title>
    <link rel="StyleSheet" type="text/css" href="css/reset.css">
</head>

<body>
    <?php
    include 'php/header.php';
    require 'config.php';
    require 'connection.php';
    require 'database.php';
    ?>
    <main>
      <h2> Login </h2><br>
      <form action="login.php" method="post">
        <input type="text" name="login" id="login"><br>
        <input type="password" name="senha" id="senha"><br>
        <input type="submit" value="Entrar" name="entrar" id="entrar">
      </form>
      <a href="cadastro_form.php">Cadastre-se</a>

    </main>
    <?php
      include 'php/footer.php';
    ?>
</body>
</html>

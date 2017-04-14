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
  ?>
  <form method="POST" action="cadastro.php">
      <label>Login:</label><input type="text" name="login" id="login"><br>
      <label>Senha:</label><input type="password" name="senha" id="senha"><br>
      <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
    </form>
    <?php
      include 'php/footer.php';
    ?>
</body>
</html>

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
  <main>
    <form method="post" action="php/cadastro.php">
      Login<input type="text" name="login" id="login"><br>
      Senha<input type="password" name="senha" id="senha"><br>
      <input type="submit" value="Cadastrar" name="cadastrar" id="cadastar">
    </form>
  </main>
    <?php
      include 'php/footer.php';
    ?>
</body>
</html>

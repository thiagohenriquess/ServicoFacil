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
      <h2> Login </t2><br>
      <form action="painel.php" method="post">
        <input type="text" name="login" id="login"><br>
        <input type="password" name="senha" id="senha"><br>
        <input type="submit" value="Entrar" name="entrar" id="entrar">
      </form><br>
      <a href="cadastro.html">Cadastre-se</a>
    </main>
    <?php
      include 'php/footer.php';
    ?>
</body>
</html>

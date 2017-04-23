<?php
  include 'php/header.php';
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';
  ?>
  <main id="container">
    <h2>Acesso:</h2><br>
    <form action="php/login.php" method="post">
      E-mail:<br><input type="email" name="login" id="login"><br>
      Senha:<br><input type="password" name="senha" id="senha"><br><br>
      <input type="submit" value="Entrar" name="entrar" id="entrar">
    </form>
    <br>
    <a href="cadastro_form.php?tipo=Cliente">Quero ser cliente do Serviço Fácil</a><br>
    <a href="cadastro_form.php?tipo=Prestador">Sou profissional e quero candidatar a prestar</a>
    <br>
    <br>
  </main>
<?php
  include 'php/footer.php';
?>

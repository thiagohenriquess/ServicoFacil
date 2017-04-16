<?php
  include 'php/header.php';
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';
  ?>
  <main>
    <h2> Login </h2><br>
    <form action="php/login.php" method="post">
      <input type="text" name="login" id="login"><br>
      <input type="password" name="senha" id="senha"><br>
      <input type="submit" value="Entrar" name="entrar" id="entrar">
    </form>
    <a href="cadastro_form.php">Cadastre-se</a>
    <br>
  </main>
<?php
  include 'php/footer.php';
?>

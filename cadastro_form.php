<?php
  include 'php/header.php';
?>
  <main id="container">
    <form method="post" action="php/cadastro.php">
      <h3>Cadastro de <?php echo $_GET["tipo"] ?>:</h3><br>
      E-mail<br><input type="email" name="login" id="login"><br>
      Senha<br><input type="password" name="senha" id="senha"><br>
      Redigite a senha<br><input type="password" name="senha2" id="senha2"><br><br>
      <input type="submit" value="Cadastrar" name="cadastrar" id="cadastar">
    </form>
    <br>
  </main>
<?php
      include 'php/footer.php';
?>

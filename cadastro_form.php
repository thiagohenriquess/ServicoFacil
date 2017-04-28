<?php
  include 'php/header.php';
?>
  <main id="container">
    <form method="post" action="php/cadastro.php">
      <h3>Cadastro de <?php echo $_GET["tipo"] ?>:</h3><br>
      Nome<br><input type="text" name="nome" id="nome"><br>
      Sobrenome<br><input type="text" name="sobrenome" id="sobrenome"><br>
      E-mail<br><input type="email" name="login" id="login"><br>
      Senha<br><input type="password" name="senha" id="senha"><br>
      Redigite a senha<br><input type="password" name="senha2" id="senha2"><br><br>
      <input type="hidden" name="tipo" id="tipo" value=<?php echo $_GET["tipo"] ?>>
      <input type="submit" value="Cadastrar" name="cadastrar" id="cadastar">
    </form>
    <br>
  </main>
<?php
      include 'php/footer.php';
?>

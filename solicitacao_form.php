<?php
  include 'php/header.php';
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';
?>
  <div id="container">
    <form action="solicitacao.php" method="post">
      <select name="tipo_servico" id="tipo_servico">
    <?php
      $table = "tipo_servico";
      $fields = "nome";

      $verifica = DBRead($table, null, $fields);
      sort($verifica);

      foreach ($verifica as $key => $array) {
        foreach ($array as $key2 => $value) {
          echo "<option value='{$value}'>{$value}</option><br>";
        }
      }
      ?>
      </select>
      <br>
      <select size=5 name="servico" id="servico">
        <?php
        $tableServico = "servico";
        $fieldsServico = "nome";
        $verificaServico = DBRead($tableServico, null, $fieldsServico);
        sort($verifica);

        foreach ($verificaServico as $key => $array) {
          foreach ($array as $key2 => $value) {
            echo "<option value='{$value}'>{$value}</option><br>";
          }
        }
      ?>
    </select>
    <br>
    <input type="submit" value="Entrar" name="entrar" id="entrar">
  </div>
</form>
<?php
  include 'php/footer.php';
?>

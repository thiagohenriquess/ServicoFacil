<?php
  include 'php/header.php';
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';
?>
  <div id="container">
    <form action="solicitacao.php" method="post" enctype="multipart/form-data">
      <select name="tipo_servico" id="tipo_servico" required>
    <?php
      $table = "tipo_servico";
      $fields = "tipo_servico_id, nome";

      $verifica = DBRead($table, null, $fields);
      sort($verifica);

      echo "<option value='' disabled selected>Selecione Tipo do servidor</option><br>";
      foreach ($verifica as $key => $array) {

        $tipo_servico_id = $array['tipo_servico_id'];
        $tipo_servico_nome = $array['nome'];

        echo "<option value='{$tipo_servico_id}'>{$tipo_servico_nome}</option><br>";

      }
      ?>
      </select>
      <select size ='5' name="servico" id="servico" required>
        <option value='' disabled>Selecione o servico  </option>
        <?php
        //  echo "<option value='{$value}'>{$value}</option><br>";

          ?>
    </select>
    <br>
    <input type="submit" value="Entrar" name="entrar" id="entrar">
  </div>
</form>
<?php
  include 'php/footer.php';
?>

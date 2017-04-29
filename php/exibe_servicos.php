<?php
  include 'header.php';
  require '../db/config.php';
  require '../db/connection.php';
  require '../db/database.php';

  $id = $_GET['id'];

  echo "<br><br><br><br><br><br>aaaaga";

  $table = "servico";
  $fields = "servico_id, nome";
  $where = "WHERE tipo_servico_id = '$id'";

  $verifica = DBRead($table, $where, $fields);
  sort($verifica);

  foreach ($verifica as $key => $array) {

    $servico_id = $array['servico_id'];
    $servico_nome = $array['nome'];

    echo "<option class='servico' value='{$servico_id}'>{$servico_nome}</option><br>";

  }

?>

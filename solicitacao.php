<?php
  include 'php/header.php';
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';

  $tipo_servico_id = $_POST["tipo_servico"];
  $servico_id = $_POST["servico"];

  $table = "servico";
  $params = "WHERE servico_id = '$servico_id'";
  $fields = "nome, valor";
  $verifica = DBRead($table, $params, $fields);

  foreach ($verifica as $key => $array) {
    $valor = $array['valor'];
    $servico = $array['nome'];
  }

  $tableTS = "tipo_servico";
  $paramsTS = "WHERE tipo_servico_id = '$tipo_servico_id'";
  $fieldsTS = "nome";
  $verificaTS = DBRead($tableTS, $paramsTS, $fieldsTS);

  foreach ($verificaTS as $keyTS => $arrayTS) {
    $tipo_servico = $arrayTS['nome'];
  }

  echo "<div id=\"container\">";
  echo "<br>Tipo: $tipo_servico<br>";
  echo "<br>Serviço: $servico<br>";
  echo "Valor: R$ ". number_format($valor, 2, ',', '.')."<br>";
  echo "Seu Credito: R$ 0,00<br>";
  echo "Total: ".number_format($valor, 2, ',', '.')."<br><br>";

  setcookie("valor",$valor, (time() + (2 * 3600)));
  setcookie("servico",$servico, (time() + (2 * 3600)));
  setcookie("tipo_servico",$tipo_servico, (time() + (2 * 3600)));

  echo "<a href='solicitacao_form.php'>Voltar</a> ";
  echo "<a href='solicitacao_confirmada.php'>Confirmar</a>";
  echo "</div>";
  include 'php/footer.php';
?>

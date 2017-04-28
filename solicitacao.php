<?php
  include 'php/header.php';
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';

  $tipo_servico = $_POST["tipo_servico"];
  $servico = $_POST["servico"];  

  $table = "servico";
  $params = "WHERE nome = '$servico'";
  $fields = "valor";

  $verifica = DBRead($table, $params, $fields);

  foreach ($verifica as $key => $array) {
      foreach ($array as $key2 => $value) {
        $valor = $value;
      }
    } 

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
  include 'php/footer.php';
?>

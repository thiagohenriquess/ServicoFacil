<?php
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';



  $tableUsuario = 'usuario';
  $paramsUsuario = "WHERE login = ". $login;
  $fieldsUsuario = "usuario_id";
  $usuario = DBRead($tableUsuario, $paramsUsuario, $fieldsUsuario);

  foreach ($usuario as $key => $array) {
    foreach ($array as $key2 => $value) {
      $usuario_id = $value;
    }
  }

  $table = 'solicitacao';
  $params = "WHERE usuario_id = ".$usuario_id;
  $fields = "numero, tipo_servico_id,status, data_inicio";
  $verifica = DBRead($table, $params, $fields);

  if($verifica){
    echo "<table>
    <tr>
        <th>numero</th>
        <th>tipo_servico_id</th>
        <th>status</th>
        <th>data_inicio</th>
      </tr>"
    ;
    foreach ($verifica as $key => $array) {
      echo "<tr>";

      foreach ($array as $key2 => $value) {
        if ($key2 = 'tipo_servico_id') {
          $tableTipoServico = 'tipo_servico';
          $paramsTipoServico = "WHERE tipo_servico_id = '$value'";
          $fieldsTipoServico = "nome";
          $tipo_servico = DBRead($tableTipoServico, $paramsTipoServico, $fieldsTipoServico);
          if($tipo_servico){
            foreach ($tipo_servico as $key3 => $array2) {
              foreach ($array2 as $key4 => $value2) {
                $value = $value2;
              }
            }
        }
      }

        echo "<td>$value</td>";
      }
      echo "/<tr>";
    }
    echo "</table>";
  }
?>

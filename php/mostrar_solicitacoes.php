<?php
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';



  $tableUsuario = 'usuario';
  $paramsUsuario = "WHERE login = '$login'";
  $fieldsUsuario = "usuario_id";
  $usuario = DBRead($tableUsuario, $paramsUsuario, $fieldsUsuario);


  foreach ($usuario as $key => $array) {
    foreach ($array as $key2 => $value) {
      $usuario_id = $value;
    }
  }


  $table = 'solicitacao';
  $params = "WHERE usuario_id = ".$usuario_id;
  $fields = "numero, tipo_servico_id, servico_id,status, data_inicio";
  $verifica = DBRead($table, $params, $fields);


  if($verifica){
    echo "<table>
      <tr>
        <th>Número</th>
        <th>Tipo Serviço</th>
        <th>Serviço</th>
        <th>Status</th>
        <th>Data Início</th>
      </tr>"
    ;
    foreach ($verifica as $key => $array) {
      echo "<tr>";

        $numero = $array['numero'];
        $tipo_servico_id = $array['tipo_servico_id'];
        $servico_id = $array['servico_id'];
        $status = $array['status'];
        $data = $array['data_inicio'];

        $tableTipoServico = 'tipo_servico';
        $paramsTipoServico = "WHERE tipo_servico_id = '$tipo_servico_id'";
        $fieldsTipoServico = "nome";
        $tipo_servico = DBRead($tableTipoServico, $paramsTipoServico, $fieldsTipoServico);

        if($tipo_servico){
          foreach ($tipo_servico as $key3 => $array2) {
              foreach ($array2 as $key4 => $value2) {
                $tipo_servico_nome = $value2;
              }
          }
        }

        $tableServico = 'servico';
        $paramsServico = "WHERE servico_id = '$servico_id'";
        $fieldsServico = "nome";
        $servico = DBRead($tableServico, $paramsServico, $fieldsServico);

        if($servico){
          foreach ($servico as $key5 => $array3) {
            foreach ($array3 as $key6 => $value3) {
              $servico_nome = $value3;
            }
          }
        }
        echo "<td>$numero</td>"  ;
        echo "<td>$tipo_servico_nome</td>";
        echo "<td>$servico_nome</td>";
        echo "<td>$status</td>";
        echo "<td>$data</ td>";
      echo "</tr>";
    }
    echo "</table>";

  }
?>

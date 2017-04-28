<?php
  require 'db/config.php';
  require 'db/connection.php';
  require 'db/database.php';

  $tipo_servico_nome = $_COOKIE['tipo_servico'];
  $servico_nome = $_COOKIE['servico'];
  $usuarioR = $_COOKIE['login'];

  $status = "Aguardando";
  $valor = $_COOKIE['valor'];
  $numero = rand ( 1000 , 9999);
  $data = date('d-m-Y');

  $tableTipoServico = 'tipo_servico';
  $paramsTipoServico = "WHERE nome = '$tipo_servico_nome'";
  $fieldsTipoServico = "tipo_servico_id";
  $tipo_servico = DBRead($tableTipoServico, $paramsTipoServico, $fieldsTipoServico);

  $tableUsuario = 'usuario';
  $paramsUsuario = "WHERE login = ". $usuarioR;
  $fieldsUsuario = "usuario_id";
  $usuario = DBRead($tableUsuario, $paramsUsuario, $fieldsUsuario);

  $tableServico = 'servico';
  $paramsServico = "WHERE nome = '$servico_nome'";
  $fieldsServico = "servico_id";
  $servico = DBRead($tableServico, $paramsServico, $fieldsServico);


  if($tipo_servico && $usuario && $servico){
    foreach ($tipo_servico as $key => $array) {
      foreach ($array as $key2 => $value) {
        $tipo_servico_id = $value;
      }
    }
    foreach ($usuario as $key => $array) {
      foreach ($array as $key2 => $value) {
        $usuario_id = $value;
      }
    }
    foreach ($servico as $key => $array) {
      foreach ($array as $key2 => $value) {
        $servico_id = $value;
      }
    }
    $array = array(
      'numero' =>  $numero,
      'valor' =>  $valor,
      'data_inicio'   => $data,
      'status' =>  $status,
      'servico_id' => $servico_id,
      'tipo_servico_id' =>  $tipo_servico_id,
      'usuario_id' =>  $usuario_id
    );

    $insert = DBInsert("solicitacao", $array);

    if($insert){
      echo"<script language='javascript' type='text/javascript'>alert('Solicitacao gravada');</script>";
      header("Location:./painel.php?login=$usuarioR");

    }
    else {
      echo"<script language='javascript' type='text/javascript'>alert('não foi possivel solicitar');</script>";
      header("Location:./painel.php?login=$login");
    }

  }


  else{
    echo"<script language='javascript' type='text/javascript'>alert('não foi possivel solicitar');</script>";
    header("Location:./painel.php?login=$login");

  }



?>

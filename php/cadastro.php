<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$login = $_POST['login'];
$email = $login;
$senha = md5($_POST['senha']);
$senha2 = md5($_POST['senha2']);
$uid = uniqid( rand( ), true );
$data_ts = time( );
$ativo = 0;

$tipo = $_POST['tipo'];
require '../db/config.php';
require '../db/connection.php';
require '../db/database.php';

$array = array(
  'login' => "$login",
  'nome' => "$nome",
  'sobrenome' => "$sobrenome",
  'senha' => "$senha",
  'uid'   => "$uid",
  'data_ts' => "$data_ts",
  'ativo' => "$ativo"
);

$table = 'usuario';
$params = "WHERE login = '$login'";
$verifica = DBRead($table, $params);

if($verifica){
  echo"<script language='javascript' type='text/javascript'>alert('Email já cadastrado');window.location.href='../cadastro_form.php';</script>";
}

if ($login == '' || $login == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');</script>";
    header("location:../cadastro_form.php?tipo=$tipo");
} elseif ($senha != $senha2) {
    echo"<script language='javascript' type='text/javascript'>alert('As senhas não conferem, favor redigitar');window.location.href='../cadastro_form.php';</script>";
} else {

    $insert = DBInsert("usuario", $array, $id);
    if ($insert) {

      $url = sprintf( 'id=%s&email=%s&uid=%s&key=%s',$id, md5($email), md5($uid),md5($data_ts));

         $mensagem = 'Para confirmar seu cadastro acesse o link:'."\n";
         $mensagem .= sprintf('http://servicofacil.16mb.com/php/ativar.php?%s',$url);

         mail( $email, 'Confirmacao de cadastro', $mensagem );

        echo"<script language='javascript' type='text/javascript'>alert('Enviado email!');window.location.href='../index.php'</script>";
    } else {
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../cadastro_form.php'</script>";
    }
}

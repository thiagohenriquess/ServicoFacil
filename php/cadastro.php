<?php

$login = $_POST['login'];
$email = $login;
$senha = md5($_POST['senha']);
$senha2 = md5($_POST['senha2']);
$uid = uniqid( rand( ), true );
$data_ts = time( );
$ativo = 0;

require '../db/config.php';
require '../db/connection.php';
require '../db/database.php';

$array = array(
  'login' => "$login",
  'senha' => "$senha",
  'uid'   => "$uid",
  'data_ts' => "$data_ts",
  'ativo' => "$ativo"
);

if ($login == '' || $login == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='../cadastro_form.php';</script>";
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

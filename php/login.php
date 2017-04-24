<?php
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);

  require '../db/config.php';
  require '../db/connection.php';
  require '../db/database.php';

  $table = 'usuario';
  $params = "WHERE login = '$login' AND senha = '$senha'";
  $fields = "login, senha";
  $verifica = DBRead($table, $params, $fields);

  if (!$verifica){
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
    die();
  }else{
    setcookie("login",$login);
    header("Location:../painel.php");
  }
?>

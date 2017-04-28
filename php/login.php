<?php
  session_start();
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);

  require '../db/config.php';
  require '../db/connection.php';
  require '../db/database.php';

  $table = 'usuario';
  $params = "WHERE login = '$login' AND senha = '$senha' AND ativo = 1";
  $fields = "login, senha";
  $verifica = DBRead($table, $params, $fields);

  //tratar se o usuario existe e senha errada de outra forma
  if (!$verifica){
    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='../index.php';</script>";
    die();
  }else{
    $_SESSION['login'] = $login;
    $_SESSION['senha'] = $senha;
    header("location:../painel.php?login='$login'");
  }
?>

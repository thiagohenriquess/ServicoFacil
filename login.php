<?php
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $connect = mysql_connect('localhost:3306','root','root');
  $db = mysql_select_db('ServicoFacil');
  echo $db;
    if (isset($entrar)) {

      $verifica = mysql_query("SELECT * FROM usuario WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='index.php';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:painels.php");
        }
    }
?>

<?php

$login = $_POST['login'];
$senha = $_POST['senha'];

require '../db/config.php';
require '../db/connection.php';
require '../db/database.php';

$array = array(
  'login' => "$login",
  'senha' => "$senha"
);

if ($login == '' || $login == null) {
    echo"<script language='javascript' type='text/javascript'>alert('O campo login deve ser preenchido');window.location.href='../cadastro_form.php';</script>";
} else {
    $insert = DBInsert("usuario", $array);

    if ($insert) {
        echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='../index.php'</script>";
    } else {
        echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../cadastro_form.php'</script>";
    }
}

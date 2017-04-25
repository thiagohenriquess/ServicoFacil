<?php
	require '../db/config.php';
	require '../db/connection.php';
	require '../db/database.php';
	require 'cadastro.php';

	$emailMd5 = $_GET['login'];
	$uidMd5 = $_GET['uid'];
	$dataMd5 = $_GET['key'];

	$table = 'usuario';
  	$params = "WHERE login = '$login' AND uid = '$uidMd5'";
  	$fields = "login, senha";
  	$verifica = DBRead($table, $params, $fields);

  	$valido = true;

  	if ($verifica){
  	    $sql = "update usuario set ativo='1' where uid='$uid'";
	
    $result = DBExecute($sql);

	echo "$sql";
}



?>
<?php
	require '../db/config.php';
	require '../db/connection.php';
	require '../db/database.php';

	$id = $_GET['id'];
	$emailMd5 = $_GET['email'];
	$uidMd5 = $_GET['uid'];
	$dataMd5 = $_GET['key'];

	$valido = true;

	$table = 'usuario';
  $params = "WHERE usuario_id = '$id'";
  $fields = "login, uid, data_ts";
  $verifica = DBRead($table, $params, $fields);

  $valido = true;


	foreach ($verifica as $key => $array) {
		if( $emailMd5 !== md5( $array['login'] ) )
    	$valido = false;

		if( $uidMd5 !== md5( $array['uid'] ) )
    	$valido = false;

		if( $dataMd5 !== md5( $array['data_ts'] ) )
    	$valido = false;
	}

	if( $valido == true ) {
		$array = array(
			'ativo' => 1
		 );
		 $table = 'usuario';
		 $params = "usuario_id = $id";

		 $result = DBUpdate($table,$array,$params);

		 if($result){
		 		echo"<script language='javascript' type='text/javascript'>alert('Cadastro com sucesso!');window.location.href='../index.php'</script>";
			}
			else {
				echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='../cadastro_form.php'</script>";
			}

		}
else {
		echo"<script language='javascript' type='text/javascript'>alert('Usuário nao existe');window.location.href='../cadastro_form.php'</script>";
}



?>

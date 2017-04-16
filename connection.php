<?php
  //Abre conexaão com o Banco de Dados
    function DBConnect(){
    $db = @mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die(mysqli_connect_error());
    mysqli_set_charset($db,DB_CHARSET) or die (mysqli_error($db));
    return $db;
  }

  //Fecha conexao
    function DBClose($db){
      mysqli_close($db) or die (mysqli_error($db));

    }

    //Protege contra SQL Injection
    function DBEscape($dados){
      $db = DBConnect();

      if(!is_array($dados)){
        $dados =  mysqli_real_escape_string($db, $dados);
      }
      else{
        $array = $dados;

        foreach ($array as $key => $value) {
            $key = mysqli_real_escape_string($db, $key);
            $value = mysqli_real_escape_string($db, $value);

            $dados[$key] = $value;
        }
      }

      DBClose($db);
      return $dados;
    }
 ?>

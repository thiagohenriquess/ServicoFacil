<?php
  //Executa query
  function DBExecute ($query){
    $db = DBConnect();
    $result = @mysqli_query( $db , $query) or die(mysqli_error($db));


    DBClose($db);
    return $result;
  }

  //grava registro
  function DBInsert($table, array $data){
    $data = DBEscape($data);

    $fields = implode(',', array_keys($data));
    $values = "'".implode("', '", $data)."'";

    $query = "INSERT INTO {$table} ( {$fields} ) VALUES ({$values})";

    return DBExecute($query);
  }

 ?>

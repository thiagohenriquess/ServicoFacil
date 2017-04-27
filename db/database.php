<?php

  //Executa query
  function DBExecute ($query, &$id = null){
    $db = DBConnect();
    $result = @mysqli_query( $db , $query) or die(mysqli_error($db));

    $id = @mysqli_insert_id( $db );

    DBClose($db);
    return $result;
  }

  //grava registro
  function DBInsert($table, array $data, &$id = null){
    $data = DBEscape($data);

    $fields = implode(',', array_keys($data));
    $values = "'".implode("', '", $data)."'";

    $query = "INSERT INTO {$table} ( {$fields} ) VALUES ({$values})";

    return DBExecute($query,$id);
  }

  //Ler registros
  function DBRead($table, $params = null, $fields = '*'){
    $params = ($params) ? " $params" : null;

    $query = "SELECT {$fields} FROM {$table}{$params}";
    $result = DBExecute($query);

    if(mysqli_num_rows($result)){

      while($var = mysqli_fetch_assoc($result)){
          $data[] = $var;
      }
      return $data;
    }
    else{
      return null;
    }

    return $result;
  }

  //Altera dados
  function DBUpdate($table, array $data, $where = null){

      foreach ($data as $key => $value) {
        $fields[] = "{$key} = '{$value}'";
      }

      $fields = implode(', ', $fields);

      $where = ($where) ? " WHERE {$where}" : null;

      $query = "UPDATE {$table} SET {$fields}{$where}";
      $result = DBExecute($query);
      return $result;
  }


 ?>

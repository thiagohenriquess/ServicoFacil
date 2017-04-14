<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>T1</title>
    <link rel="StyleSheet" type="text/css" href="css/reset.css">
</head>

<body>
    <?php
    include 'php/header.php';
    ?>
    <main>
    <?php
      $login = $_POST['login'];
      $entrar = $_POST['entrar'];
      $senha = md5($_POST['senha']);
      echo 'Ola '.$login; 
    ?>
  </main>
    <?php
      include 'php/footer.php';
    ?>
</body>
</html>

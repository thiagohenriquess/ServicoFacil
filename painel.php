<?php
  include 'php/header.php';
  include 'php/menu.php';
?>
<main id="container">
  <?php
    if ((!isset($_SESSION['login']) == true) and (!isset($_SESSION['senha'])==true)){
      unset($_SESSION['login']);
      unset($_SESSION['senha']);
      header('location:index.php');
    }
    else{
      $login = $_SESSION['login'];
      $nome = $_SESSION['nome'];
      $sobrenome = $_SESSION['sobrenome'];
    }
    echo "Olá $nome $sobrenome";
    setcookie('login',$login, (time() + (2 * 3600 * 24)));
    echo "<br>";
    echo "<br>";
    include 'php/mostrar_solicitacoes.php';
  ?>
</main>
<?php
  include 'php/footer.php';
?>

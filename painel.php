<?php
  include 'php/header.php';
?>
<main>
  <?php
    if (isset($_GET['login'])){
      $login = $_GET['login'];
    }
    else{
      $login = 'aa';
    }
    echo 'Olá '.$login;
    setcookie('login',$login, (time() + (2 * 3600 * 24)));
    echo "<br>";
    echo "<a href='solicitacao_form.php' >Solicitar</a>";
    echo "<br>";
    include 'php/mostrar_solicitacoes.php';
  ?>
</main>
<?php
  include 'php/footer.php';
?>

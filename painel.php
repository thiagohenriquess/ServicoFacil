<?php
  include 'php/header.php';
?>
<main>
  <?php
    $login = $_COOKIE['login'];
    echo 'Olá '.$login;
  ?>
</main>
<?php
  include 'php/footer.php';
?>

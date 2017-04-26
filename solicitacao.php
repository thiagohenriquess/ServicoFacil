<?php
  include 'php/header.php';
  $tipo_servico = $_POST["tipo_servico"];
  $valor = 100.10;


  echo "<br>Tipo: $tipo_servico<br>";
  echo "Valor: R$ ". number_format($valor, 2, ',', '.')."<br>";
  echo "Seu Credito: R$ 0,00<br>";
  echo "Total: ".number_format($valor, 2, ',', '.')."<br><br>";

  setcookie("valor",$valor, (time() + (2 * 3600)));
  setcookie("tipo_servico",$tipo_servico, (time() + (2 * 3600)));

  echo "<a href='solicitacao_form.php'>Voltar</a> ";
  echo "<a href='solicitacao_confirmada.php'>Confirmar</a>";
  include 'php/footer.php';
?>

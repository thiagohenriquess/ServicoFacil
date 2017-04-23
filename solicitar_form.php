<?php
  include 'php/header.php';
  include 'php/menu.php';
?>
  <main>
    <form method="post" action="php/solicitarServico.php" id="formServ">
      <h3>Solicitar serviço:</h3><br>
      Tipo de serviço:
      <select id="caixaTipo">
        <option value="bombeiro">Bombeiro Hidraulico</option>
        <option value="teste">teste</option>
        <option value="teste teste">testeTeste</option>
      </select><br><br>
      <select multiple id="caixaSelecao">
        <option value="teste">teste</option>
        <option value="teste">teste</option>
        <option value="teste">teste</option>
      </select>
    </form>
    <br>
  </main>
<?php
      include 'php/footer.php';
?>

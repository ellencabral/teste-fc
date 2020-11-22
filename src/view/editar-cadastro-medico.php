<?php 
  include ('../header.php'); 
  include '../model/medico-classe.php';
  include '../model/medico-classe-dao.php';

  if($_GET['medico']) {
    $medicoDAO = new MedicoDAO();
    $medico = new Medico();
    
    $medico->setId($_GET['id']);

    $usuario = $medicoDAO->visualizaMedico($medico);
  }
  ?>

  <h1>Editar médico</h1>

  <form method='post' action='../controller/medico-controller.php'>
      Nome
      <input type='text' name='nome' value='<?= $usuario->getNome() ?>'/>
      Senha antiga
      <input type='password' name='senhaantiga' placeholder='Insira a senha antiga'/>
      Nova senha
      <input type='password' name='novasenha' placeholder='Escolha uma nova senha forte e segura'/>
      <input type='hidden' name='id' value='<?= $usuario->getId() ?>'>
      
      <button type='submit' name='atualiza'>Atualizar cadastro</button>
  </form>

  <a href='../index.php'>Voltar para a Página Inicial</a>
</body>
</html>
<?php 
  include '../header.php'; 
  include '../model/medico-classe.php';
  include '../model/medico-classe-dao.php';

  if($_GET['medico']) {
    $medicoDAO = new MedicoDAO();
    $medico = new Medico();
    
    $medico->setId($_GET['id']);

    $usuario = $medicoDAO->visualizaMedico($medico);
  }
  ?>
  <div class="form-container flex-column">
    <form class="flex-column" method='post' action='../controller/medico-controller.php'>
      <h1>Editar médico</h1>
      <label for ="nome">Nome</label>
      <input type='text' name='nome' value='<?php echo $usuario->getNome() ?>'/>
      <label for ="senhaantiga">Senha antiga</label>
      <input type='password' name='senhaantiga' placeholder='Insira a senha antiga'/>
      <label for ="novasenha">Nova senha</label>
      <input type='password' name='novasenha' placeholder='Escolha uma nova senha forte e segura'/>
      <input type='hidden' name='id' value='<?php echo $usuario->getId() ?>'>
      
      <button class='button' type='submit' name='atualiza'>Atualizar cadastro</button>
    </form>

    <a href='../index.php'>Voltar para a Página Inicial</a>
  </div>
</div>
</body>
</html>
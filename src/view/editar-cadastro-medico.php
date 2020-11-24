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
    <form class="flex-column" method='post' onsubmit="return validaForm()" action='../controller/medico-controller.php'>
      <h1>Editar médico</h1>
      <label for ="nome">Nome</label>
      <input class="campo" type='text' name='nome' value='<?php echo $usuario->getNome() ?>'/>
      <div class='mensagem'></div>

      <label for ="senhaantiga">Senha antiga</label>
      <input class="campo" type='password' name='senhaantiga' placeholder='Insira a senha antiga'/>
      
      <?php
        if(isset($_GET['wrongpass'])) { ?>
          <div class='mensagem'>Senha antiga incorreta.</div>
        <?php
        }
        else { ?>
          <div class='mensagem'></div>
        <?php
        }
      ?>
      <label for ="novasenha">Nova senha</label>
      <input class="campo" type='password' name='novasenha' placeholder='Escolha uma nova senha forte e segura'/>
      <div class='mensagem'></div>

      <input type='hidden' name='id' value='<?php echo $usuario->getId() ?>'>
      
      <button class='button' type='submit' name='atualiza'>Atualizar cadastro</button>
    </form>

    <a href='../index.php'>Voltar para a Página Inicial</a>
  </div>
</div>
</body>
</html>
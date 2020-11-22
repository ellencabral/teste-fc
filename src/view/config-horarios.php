<?php 
  include ('../header.php'); 
  include '../model/medico-classe.php';
  include '../model/medico-classe-dao.php';
  include '../model/horario-classe-dao.php';

  if($_GET['medico']) {
    $medicoDAO = new MedicoDAO();
    $medico = new Medico();
    
    $id_medico = $_GET['id'];
    $medico->setId($id_medico);

    $usuario = $medicoDAO->visualizaMedico($medico);
  }
  ?>

  <h1>Adicionar horários</h1>

  <form method='post' action='../controller/horario-controller.php'>
      Nome
      <?= $usuario->getNome() ?>
      Data e hora
      <input type='datetime-local' name='data' required/>
      
      <input type='hidden' name='id' value='<?= $usuario->getId() ?>'>
      
      <button type='submit' name='adiciona-horario'>Adicionar horário</button>
  </form>

  <a href='../index.php'>Voltar para a Página Inicial</a>

  <h1>Horários configurados</h1>

  <?php
  $horarioDAO = new HorarioDAO();
  $horarios = $horarioDAO->listaHorarios($id_medico);
  
  if($horarios) {
    foreach ($horarios as $horario) {
      ?>
      <div class="horario-container">
          <?php
            echo date_format(new DateTime($horario->data_horario), 'd/m/Y H:i');
            if($horario->horario_agendado == 0) { ?>
              <form method='post' action='../controller/horario-controller.php'>
                <input type='hidden' name='id' value='<?= $horario->id ?>'/>
                <button type='submit' name='remove'>Remover</button>
              </form>
            <?php
            }  
          ?>
      </div>  
      <?php
    }
  }
  else {
    echo "Sem horários";
  }
  
  ?>
</body>
</html>
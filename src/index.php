<?php 
    include 'header.php';
    include 'model/medico-classe-dao.php';
    include 'model/horario-classe-dao.php';

    $medicoDAO = new MedicoDAO();
    $medicos = $medicoDAO->listaMedicos();

    foreach ($medicos as $medico) {
        ?>
        <div class="medico-container">
            <?= $medico->nome ?>
        
            <button><a href='view/editar-cadastro-medico.php?id=<?= $medico->id ?>&medico=true'>Editar cadastro</a></button>
            <button><a href='view/config-horarios.php?id=<?= $medico->id ?>&medico=true'>Configurar horários</a></button>  
        </div>
        <?php 
            $horarioDAO = new HorarioDAO();

            $horarios = $horarioDAO->listaHorarios($medico->id);
        ?>
        <div class="horario-container">
            <?php
                if($horarios) {
                    foreach ($horarios as $horario) {
                      ?>
                        <form method='post' action='controller/horario-controller.php'>
                            <input type='hidden' name='id' value='<?= $horario->id ?>'/>
                            <button type='submit' name='agenda'>
                                    <?= date_format(new DateTime($horario->data_horario), 'd/m/Y à\s\ H:i') ?>
                                </a>
                            </button>
                        </form>
                      <?php
                    }
                }
                else {
                echo "Sem horários";
                }
            ?>
        </div>
        <?php
    }
?>
</body>
</html>
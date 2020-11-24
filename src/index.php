<?php 
    include 'header.php';
    include 'model/medico-classe-dao.php';
    include 'model/horario-classe-dao.php';

    $medicoDAO = new MedicoDAO();
    $medicos = $medicoDAO->listaMedicos();

    foreach ($medicos as $medico) {
        ?>
        <div class="medico-container">
            <div class="medico-header flex-row">
                <h1>
                    <?php echo $medico->nome ?>
                </h1>

                <div class="medico-buttons flex-row">
                    <button class="button flex-row"><a href='view/editar-cadastro-medico.php?id=<?php echo $medico->id ?>&medico=true'>Editar cadastro</a></button>
                    <button class="button flex-row"><a href='view/config-horarios.php?id=<?php echo $medico->id ?>&medico=true'>Configurar horários</a></button>  
                </div>
            </div>
            <?php 
                $horarioDAO = new HorarioDAO();
                $horarios = $horarioDAO->listaHorarios($medico->id);
            ?>
            <div class="horario-container flex-row">
                <?php
                    if($horarios) {
                        foreach ($horarios as $horario) {
                            $data = new DateTime($horario->data_horario);
                            $dataFormatada = date_format($data, 'd/m/Y à\s\ H:i'); ?>

                            <form method='post' action='controller/horario-controller.php'>
                                <input type='hidden' name='id' value='<?php echo $horario->id ?>'/>
                                <button class='button' type='submit' name='agenda'>
                                    <?php echo $dataFormatada ?>
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
        </div>
        <?php
    }
?>
</div>
</body>
</html>
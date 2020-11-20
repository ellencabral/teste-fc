<?php 
    include ('header.php');
    include 'model/medico-classe-dao.php';

    $medicoDAO = new MedicoDAO();
    $medicos = $medicoDAO->listaMedico();

    foreach ($medicos as $medico) {
        ?>
        <div class="medico-container">
            <?= $medico->nome ?>
        
            <button><a href='view/editar-cadastro-medico.php?id=<?= $medico->id ?>&medico=true'>Editar cadastro</a></button>
            <button><a href='view/config-horarios.php?id=<?= $medico->id ?>&medico=true'>Configurar horários</a></button>  
        </div>  
        <?php
    }
    ?>
</body>
</html>
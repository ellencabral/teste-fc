<?php
  include "../model/horario-classe.php";
  include "../model/horario-classe-dao.php";

  $horarioDAO = new HorarioDAO();
  $horario = new Horario();
  
  if(isset($_POST['adiciona-horario'])) {
    $horario->setIdMedico($_POST['id']);
    $horario->setDataHorario($_POST['data']);

    $id_medico = $horario->getIdMedico();
    $date = $horario->getDataHorario();

    if($horarioDAO->cadastraHorario($horario, $id_medico)) {
      header('location: ../view/config-horarios.php?id='.$id_medico.'&medico=true');
    }
    else {
        echo 'Erro';
    }
  }

  if(isset($_POST['remove'])) {
    $horario->setId($_POST['id']);

    if($horarioDAO->removeHorario($horario)) {
      header('location: ../view/config-horarios.php?id='.$_POST['id-medico'].'&medico=true');
    }
    else {
      echo 'Erro';
    }
  }

  if(isset($_POST['agenda'])) {
    $horario->setId($_POST['id']);

    if($horarioDAO->agendaHorario($horario)) {
      header('location: ../index.php');
    }
    else {
      echo 'Erro';
    }
  }

?>
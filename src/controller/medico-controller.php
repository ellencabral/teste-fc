<?php
  include '../config.php';
  include '../model/medico-classe.php';
  include '../model/medico-classe-dao.php';

  $medicoDAO = new MedicoDAO();
  $medico = new Medico();
  
  if(isset($_POST['cadastra'])) {
    $medico->setEmail($_POST['email']);
    $medico->setNome($_POST['nome']);
    $medico->setSenha(md5($_POST['senha']));

    if($medicoDAO->cadastraMedico($medico)) {
      header('location: '.URL.'index.php');
    }
    else {
        echo 'Erro';
    }
  }

  if(isset($_POST['atualiza'])) {
    $medico->setId($_POST['id']);
    $medico->setNome($_POST['nome']);
    $medico->setSenha(md5($_POST['novasenha']));

    $senhaantiga = md5($_POST['senhaantiga']);
    
    if($medicoDAO->atualizaMedico($medico, $senhaantiga)) {
      header('location: '.URL.'index.php');
    }
    else {
      echo 'Senha incorreta';
    }
  }

?>
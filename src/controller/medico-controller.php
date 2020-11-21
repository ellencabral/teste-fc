<?php
  include "../model/medico-classe.php";
  include "../model/medico-classe-dao.php";

  $medicoDAO = new MedicoDAO();
  $medico = new Medico();
  
  if(isset($_POST['cadastro'])) {
    $medico->setEmail($_POST['email']);
    $medico->setNome($_POST['nome']);
    $medico->setSenha(md5($_POST['senha']));

    if($medicoDAO->cadastraMedico($medico)) {
        echo "Cadastrado com sucesso";
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
      echo "Atualizado com sucesso";
    }
    else {
      echo 'Senha incorreta';
    }
  }

  if(isset($_POST['exclui'])) {
    echo "Excluiu o usuário";
  }

?>
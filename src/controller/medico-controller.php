<?php

include "../model/medico-classe.php";
include "../model/medico-classe-dao.php";

$medicoDAO = new MedicoDAO();
$medico = new Medico();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['cadastro'])) {

    $medico->setNome($_POST['nome']);
    $medico->setEmail($_POST['email']);
    $medico->setSenha(md5($_POST['senha']));

    if($medicoDAO->cadastraMedico($medico)) {
        echo "Cadastrado com sucesso";
    }
    else {
        echo 'Erro';
    }
}

?>
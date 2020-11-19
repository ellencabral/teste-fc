<?php

class Medico {

  private $id;
  private $email;
  private $nome;
  private $senha;

  function __construct() {
      $this->id    = '';
      $this->email = '';
      $this->nome  = '';
      $this->senha = '';
  }

  function setId($id) { $this->id = $id; }

  function getId() { return $this->id; }

  function setEmail($email) { $this->email = $email; }

  function getEmail() { return $this->email; }

  function setNome($nome) { $this->nome = $nome; }

  function getNome() { return $this->nome; }

  function setSenha($senha) { $this->senha = $senha; }

  function getSenha() { return $this->senha; }
}


?>
<?php

class Horario {

  private $id;
  private $id_medico;
  private $data_horario;
  private $horario_agendado;
  private $data_alteracao;

  function __construct() {
      $this->id               = '';
      $this->id_medico        = '';
      $this->data_horario     = '';
      $this->horario_agendado = '';
      $this->data_alteracao   = '';
  }

  function setId($id) { $this->id = $id; }

  function getId() { return $this->id; }
  
  function setIdMedico($id_medico) { $this->id_medico = $id_medico; }

  function getIdMedico() { return $this->id_medico; }

  function setDataHorario($data_horario) { $this->data_horario = $data_horario; }

  function getDataHorario() { return $this->data_horario; }

  function setHorarioAgendado($horario_agendado) { $this->horario_agendado = $horario_agendado; }

  function getHorarioAgendado() { return $this->horario_agendado; }

  function setDataAlteracao($data_alteracao) { $this->data_alteracao = $data_alteracao; }

  function getDataAlteracao() { return $this->data_alteracao; }
}

?>
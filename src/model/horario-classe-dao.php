<?php

include_once 'conexao-banco-dados.php';
include_once 'medico-classe.php';

class HorarioDAO extends Conexao {

    public function __construct() {
        try {
            parent::__construct();     
        } 
        catch (PDOException  $e) {
            print $e->getMessage();
        }
    }

    public function cadastraHorario(Horario $horario, $id_medico) {
        try {
            $date = date("Y-m-d H:i:s");
            $stmt = $this->pdo->prepare('INSERT INTO horario (id_medico, data_horario, horario_agendado, data_criacao, data_alteracao) VALUES (:id_medico, :data_horario, 0, :data_criacao, :data_alteracao)');

            $stmt->bindValue(':id_medico', $id_medico);
            $stmt->bindValue(':data_horario', $horario->getDataHorario());
            $stmt->bindValue(':data_criacao', $date);
            $stmt->bindValue(':data_alteracao', $date);

            if ($stmt->execute()) { 	
                return true;
            }
            else {
                return false;
            }
        } 
        catch (PDOException $e) {
            print $e->getMessage(); 
        }
    }

    public function listaHorarios($id_medico) {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM horario WHERE id_medico = :id_medico ORDER BY data_horario ASC' );
            $stmt->bindValue(':id_medico', $id_medico);

            if ($stmt->execute()) {   
                $dados = $stmt->fetchAll(PDO::FETCH_OBJ);

                return $dados;
            }
            else
            {
                return false;
            }            
        }
        catch (PDOException  $e) {
            print $e->getMessage();
        }
    }

    public function visualizaHorario(Horario $horario) {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM horario WHERE id = :id' );
            $stmt->bindValue(':id', $horario->getId());

            if ($stmt->execute()) {   
                $dado = $stmt->fetch(PDO::FETCH_OBJ);

                $horario->setId($dado->id);
                $horario->setIdMedico($dado->id_medico);
                $horario->setDataHorario($dado->data_horario);
                $horario->setHorarioAgendado($dado->horario_agendado);
        
                return $horario;
            }
            else
            {
                return false;
            }            
        }
        catch (PDOException  $e) {
            print $e->getMessage();
        }
    }

    public function agendaHorario(Horario $horario) {
      try {
        $stmt = $this->pdo->prepare('UPDATE horario SET horario_agendado = 1, data_alteracao = :data_alteracao WHERE id = :id');

        $date = date("Y-m-d H:i:s");
        $stmt->bindValue(':data_alteracao', $date);
        $stmt->bindValue(':id', $horario->getId());

        if ($stmt->execute()) {   
            return true;
        }
        else {
            return false;
        }
      } catch (PDOException $e) {
          print $e->getMessage(); 
      }
    }

    public function removeHorario(Horario $horario) {
        try {
            $horarioDAO = new HorarioDAO();
            $validaHorario = $horarioDAO->visualizaHorario($horario);

            if($validaHorario->getHorarioAgendado() == 0) {
                $stmt = $this->pdo->prepare('DELETE FROM horario WHERE id = :id');
                $stmt->bindValue(':id', $horario->getId());
        
                if ($stmt->execute())
                {   
                    return true;
                }
                else
                {
                    return false;
                }
            }
        } catch (PDOException $e) {
            print $e->getMessage(); 
        }
    }
}

?>
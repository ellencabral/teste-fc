<?php

include_once 'conexao-banco-dados.php';

class MedicoDAO extends Conexao {

    public function __construct() {
        try {
            parent::__construct();     
        } 
        catch (PDOException  $e) {
            print $e->getMessage();
        }
    }

    public function cadastraMedico(Medico $medico) {
        try {
            $date = date("Y-m-d H:i:s");
            $stmt = $this->pdo->prepare('INSERT INTO medico (email, nome, senha, data_criacao, data_alteracao) VALUES (:email, :nome, :senha, :data_criacao, :data_alteracao)');

            $stmt->bindValue(':email', $medico->getEmail());
            $stmt->bindValue(':nome', $medico->getNome());
            $stmt->bindValue(':senha', $medico->getSenha());
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

    public function listaMedicos() {
        try {
            $stmt = $this->pdo->query('SELECT * FROM medico' );
            $dados = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $dados;
        }
            catch (PDOException  $e) {
                print $e->getMessage();
        }
    }

    public function visualizaMedico(Medico $medico) {
        try {
            $stmt = $this->pdo->prepare('SELECT * FROM medico WHERE id = :id' );
            $stmt->bindValue(':id', $medico->getId());

            if ($stmt->execute()) {   
                $dado = $stmt->fetch(PDO::FETCH_OBJ);

                $medico->setId($dado->id);
                $medico->setEmail($dado->email);
                $medico->setNome($dado->nome);
                $medico->setSenha($dado->senha);
        
                return $medico;
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

    public function atualizaMedico(Medico $medico, $senhaantiga) {
        try {
            $id = $medico->getId();

            $medicoDAO = new MedicoDAO();
            $medicoA = new Medico();

            $usuario = $medicoDAO->visualizaMedico($id, $medicoA);

            if($usuario->getSenha() == $senhaantiga) {
                $stmt = $this->pdo->prepare('UPDATE medico SET nome = :nome, senha = :senha, data_alteracao = :data_alteracao WHERE id = :id AND senha = :senhaantiga');

                $date = date("Y-m-d H:i:s");
                $stmt->bindValue(':data_alteracao', $date);

                $stmt->bindValue(':id', $id);
                $stmt->bindValue(':nome', $medico->getNome());
                $stmt->bindValue(':senha', $medico->getSenha());
                $stmt->bindValue(':senhaantiga', $usuario->getSenha());

                if ($stmt->execute()) {   
                    return true;
                }
                else {
                    return false;
                }
            }
            else {
                return false;
            }
        } catch (PDOException $e) {
            print $e->getMessage(); 
        }
    }
}

?>
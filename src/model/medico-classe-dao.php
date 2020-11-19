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

        if ($stmt->execute())
        { 	
            return true;
        }
        else
        {
            return false;
        }
    } 
    catch (PDOException $e) {
        print $e->getMessage(); 
    }
}

}

?>
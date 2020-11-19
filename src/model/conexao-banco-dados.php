<?php

include_once 'config-banco-dados.php';

class Conexao {

  public function __construct() {
      try {
          $db = 'mysql:host='. DB_HOST .';dbname='. DB_NAME;
          $this->pdo = new PDO($db, DB_USER, DB_PASS);
          $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e){
          print $e->getMessage();
      }
  }
}

?>
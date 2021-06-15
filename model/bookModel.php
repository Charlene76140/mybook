<?php
  require "dataBase.php";

  class bookModel extends dataBase {

    // Récupère tous les livres
    public function getBooks() {
      $response=$this->db->query("SELECT * FROM book");
      $result = $response->fetchAll(PDO :: FETCH_ASSOC);
      foreach($result as $key=>$book){
        $result[$key] = new Book($book);
      }
      return $result;
    }

    // Récupère un livre
    public function getBook() {

    }

    // Ajoute un nouveau livre
    public function addBook() {

    }

    // Met à jour le statut d'un livre emprunté
    public function updateBookStatus() {

    }

  }

?>

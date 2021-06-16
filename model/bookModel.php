<?php
  require_once "dataBase.php";

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
    public function getBook(int $id) {
      $query= $this->db->prepare(
        "SELECT b.*, c.id as customerId, c.lastname, c.firstname, c.personnal_code FROM book as b
        LEFT JOIN customer as c
        ON c.id = b.customer_id 
        WHERE b.id=:id"
      );
      $query->execute([
        "id" => $id,
      ]);

      $result = $query->fetch(PDO::FETCH_ASSOC);
      $book = new Book($result);
      return $book;
    }

    // $result = $query->fetch(PDO::FETCH_ASSOC);
    //   if($result["customer_id"] !== NULL){
    //     $book = new Book($result);
    //     $customer = new Customer($result);
    //   }
    //   else{
    //     $book = new Book($result);
    //   }
    //   return array($book, $customer);
    // }

    // Ajoute un nouveau livre
    public function addBook() {

    }

    // Met à jour le statut d'un livre emprunté
    public function updateBookStatus() {

    }

  }

?>

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
    // public function getBook(int $id) {
    //   $query= $this->db->prepare(
    //     "SELECT b.*, c.id as customerId, c.lastname, c.firstname, c.personnal_code FROM book as b
    //     LEFT JOIN customer as c
    //     ON c.id = b.customer_id 
    //     WHERE b.id=:id"
    //   );
    //   $query->execute([
    //     "id" => $id,
    //   ]);

    //   $result = $query->fetch(PDO::FETCH_ASSOC);
    //   $book = new Book($result);
    //   return $book;
    // }


    public function getBook(int $id) {
      $query= $this->db->prepare(
        "SELECT b.*, c.id as customerId, c.lastname, c.firstname, c.personnal_code FROM book as b
        LEFT JOIN customer as c
        ON b.customer_id = c.id
        WHERE b.id=:id"
      );
      $query->execute([
        "id" => $id,
      ]);

      $result = $query->fetch(PDO::FETCH_ASSOC);
      $book=new Book($result);

      if($result["customer_id"] == NULL){
        return $book;
      }
      else{
        $customerModel = new customerModel();
        $customer= $customerModel->getCustomerById($result["customer_id"]);
        return array ($customer, $book);
      }
    }



    // Ajoute un nouveau livre
    public function addBook(Book $data) {
      $query=$this->db->prepare(
        "INSERT INTO book(title, author, release_date, category, status, summary) 
        VALUES(:title, :author, :release_date, :category, :status, :summary)"
      );
      $result=$query->execute([
        "title"=> $data->getTitle(),
        "author"=> $data->getAuthor(),
        "release_date"=> $data->getRelease_date(),
        "category"=>$data->getCategory(),
        "status"=>$data->getStatus(),
        "summary"=>$data->getSummary()
      ]);
      
      return $result;
    }

    // Met à jour le statut d'un livre emprunté
    public function updateBookStatus() {

    }

    public function deleteBook(int $id){
      $query= $this->db->prepare(
        "DELETE FROM book WHERE id=:id"
      );
      $result = $query->execute([
        "id"=>$id,
      ]);
      
      return $result; 
    }



  }
?>

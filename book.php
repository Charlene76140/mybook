<?php
    require "model/entity/book.php";
    require "model/bookModel.php";
    require "model/entity/customer.php";
    require "model/customerModel.php";

    $bookModel = new bookModel();
    $customerModel = new customerModel();

    if(isset($_GET["id"]) AND !empty($_GET["id"])){
        $book = $bookModel->getBook($_GET["id"]);

        if($book->getCustomer_id()){
            $customer=$customerModel->getCustomerById($book->getCustomer_id());
        }
    }

    if(isset($_POST["supprimer"])){
        $delete = $bookModel->deleteBook($book);
        header("Location: index.php");
        exit();
    }

    if(isset($_POST["customer_id"])){
        $attribut= $bookModel->updateBookStatus($_POST["customer_id"], $book);
        header("Location: index.php");
        exit();
    }

    if(isset($_POST["rendre"])){
        $giveBook = $bookModel->returnBook($book);
        header("Location: index.php");
        exit();
    }
   

    
    
    

    require "view/bookView.php";

?>

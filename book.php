<?php
    require "model/entity/book.php";
    require "model/bookModel.php";
    require "model/entity/customer.php";
    require "model/customerModel.php";

    $bookModel = new bookModel();
    $customerModel = new customerModel();

    if(isset($_GET["id"]) AND !empty($_GET["id"])){
        $book = $bookModel->getBook($_GET["id"]);
        var_dump($book);
        if($book->getCustomer_id()){
            $customer=$customerModel->getCustomerById($book->getCustomer_id());
            var_dump($customer);
        }
    }
    
    
    

    require "view/bookView.php";

?>

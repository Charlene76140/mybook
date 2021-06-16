<?php
    require "model/entity/book.php";
    require "model/bookModel.php";

    $bookModel = new bookModel;
    $books = $bookModel->getBooks();
    // var_dump($books);

    

    if(isset($_GET["id"]) AND $_GET["status"] === "disponible"){
        $delete = $bookModel->deleteBook($_GET["id"]);
        header("Location: index.php");
        exit();
    }
    else{
        $error="impossible de supprimer un livre indisponible";
    }


    require "view/indexView.php";

?>

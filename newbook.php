<?php
    require "model/entity/book.php";
    require "model/bookModel.php";

    $bookModel = new bookModel;

    if(!empty($_POST) AND isset($_POST)){
        $book = new Book($_POST);
        $books = $bookModel->addBook($book);
        header("Location: index.php");
        exit();
    }
    
    require "view/newbookView.php";
?>

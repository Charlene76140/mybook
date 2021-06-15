<?php
    require "model/entity/book.php";
    require "model/bookModel.php";

    $bookModel = new bookModel;
    $books = $bookModel->getBooks();
    // var_dump($books);

    




    require "view/indexView.php";

?>

<?php

require "connexionModel.php";

    abstract class dataBase{
        protected PDO $db;

        public function __construct() {
            $this->db = Connexion::getPDOConnexion();
        }
    }

?>
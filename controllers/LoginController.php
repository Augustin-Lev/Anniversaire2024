<?php

class LoginController {
    public function index(){
        $header = [
            "javascript"=>0,
            "titre"=>"Anniversaire 2024",
            "content"=>"Eh oui, on remet ça ! 
            "]; //necessaire au header de model

        require "models/Header.php";
        require "views/header.php";
        require_once "views/main_inscription.php";
        require "views/footer.php";
    }
    public function connexion(){
        $header = [
            "javascript"=>0,
            "titre"=>"Anniversaire 2024",
            "content"=>"Eh oui, on remet ça ! 
            "]; //necessaire au header de model

        require "models/Header.php";
        require "views/header.php";
        require_once "views/main_home.php";
        require "views/footer.php";
    }

}
?>
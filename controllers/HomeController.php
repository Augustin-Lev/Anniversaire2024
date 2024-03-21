<?php

class HomeController {
    public function home(){
        $header = [
            "javascript"=>0,
            "titre"=>"Anniversaire 2024",
            "content"=>"Eh oui, on remet ça ! 
            "]; //necessaire au header de model

        require "models/Header.php";
        require "views/header.php";
        require_once "views/main_index.php";
        require "views/footer.php";
    }}
?>
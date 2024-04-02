<?php

class OrganisationController {
    public function index(){
        $header = [
            "javascript"=>0,
            "titre"=>"Anniversaire 2024",
            "content"=>"Eh oui, on remet ça ! 
            "]; //necessaire au header de model       
        require "models/Header.php";
        require "views/header.php";
        require "models/baseDonnees.php";
        $inscrits = recup();
        require_once "views/main_organisation.php";
        require "views/footer.php";
    }

    public function staff(){
        setcookie("organisateur","1");
        header("Location:".BASE_URL."/");
    }

}


?>
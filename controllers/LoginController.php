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
        var_dump($_POST);
        insertionBase($_POST["nom"],$_POST["prenom"],$_POST["tel"]);
        cookies();
        session_start();
        $_SESSION["login"] = 1;
        $_SESSION["nom"] = $_POST["nom"];
        $_SESSION["prénom"] = $_POST["prenom"];

        header('Location:'.BASE_URL.'/menu');
    }

    public function deconexion(){
        $_SESSION["login"] = 0;
        $_SESSION["nom"] = "";
        $_SESSION["prénom"] = "";

      

        header('Location:'.BASE_URL.'/');
    }


}
?>
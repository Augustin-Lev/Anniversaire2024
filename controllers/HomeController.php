<?php

class HomeController {
    public function home(){
        if(isset($_SESSION["login"])){
            if($_SESSION["login"] == 1){
                header('Location:'.BASE_URL.'/menu');
            }
        }

        $header = [
            "javascript"=>0,
            "titre"=>"Anniversaire 2024",
            "content"=>"Eh oui, on remet ça ! 
            "]; //necessaire au header de model

        require "models/Header.php";
        require "views/header.php";
        require_once "views/main_index.php";
        require "views/footer.php";
    }
    public function loaded(){
        if(isset($_SESSION["login"])){
            if($_SESSION["login"] == 1){
                $header = [
                    "javascript"=>0,
                    "titre"=>"Anniversaire 2024",
                    "content"=>"Eh oui, on remet ça ! 
                    "]; //necessaire au header de model
        
                require "models/Header.php";
                require "views/header.php";
                require_once "views/main_home.php";
                require "views/footer.php";
            }else{
                header('Location:'.BASE_URL.'/');
            }
        }else{
            header('Location:'.BASE_URL.'/');
        }
       
    }
}
?>
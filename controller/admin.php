<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="..\link\style.css">
        <title>Admin</title>
        <meta name= "description" content="
        Inscrivez-vous à notre anniversaire via ce formulaire !!
        ">

        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php
            if (isset($_COOKIE["administrateur"]) && $_COOKIE["administrateur"]=="Augustin"){
                
                require "../view/header.php";

                
                if(isset($_COOKIE['nom'])){
                    $nom = $_COOKIE["nom"];   
                }
                if(isset ($_COOKIE['prenom'])){
                    $prenom = $_COOKIE['prenom'];
                    
                }
                if(isset ($_COOKIE['email'])){
                    $email = $_COOKIE["email"];
                    
                }
                if(isset ($_COOKIE['tel'])){
                    $tel = $_COOKIE['tel'];
                    
                }
                if(isset ($_COOKIE['organisation'])){
                    $organisation = $_COOKIE['organisation'];
                    
                }
                if(isset ($_COOKIE['viens'])){
                    $viens = $_COOKIE['viens'];
                    
                }

                require_once "../model/baseDonnees.php";
                require_once "../view/main_admin.php";
                require "../view/footer.php";

                if(isset($_GET["action"])){
                    if ($_GET["action"] == 0){
                        echo '<script>alert("la personne est déjà dans cette catégorie")</script>';
                    }
                    if ($_GET["action"] == 1){
                        echo '<script>alert("l\'ancien champ à bien été suprimé ")</script>';
                    }
                    if ($_GET["action"] == 2){
                        echo  '<script>alert("ERREUR au niveau de la suppression du nom de la section anterieure")</script>';
                    }
                    if ($_GET["action"] == 3){
                        echo '<script>alert("le champ à bien été changé ")</script>';
                    }
        
                    if ($_GET["action"] == 4){
                        echo  '<script>alert("ERREUR au niveau de la suppression du nom de la section anterieure")</script>';
                    }
        
                    if ($_GET["action"] == 5){
                        echo '<script>alert("ERREUR au niveau de la création du nouveau champ ")</script>';  
                    }
                }

            }else{
                require("index.php");
            }
            
        ?>
        <script src="../link/script.js"></script>
    </body>
</html>

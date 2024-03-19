<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="..\link\style.css">
        <title>Formulaire</title>
        <meta name= "description" content="
        Inscrivez-vous à notre anniversaire via ce formulaire !!
        ">

        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk&display=swap" rel="stylesheet">

    </head>
    <body>
        <?php
            
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


            require_once "../view/main_inscription.php";
            require "../view/footer.php";
        ?>
        <script src="../link/script.js"></script>
    </body>
</html>

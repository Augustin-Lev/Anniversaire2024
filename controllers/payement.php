<?php
if(isset($_POST['consignes']) && $_POST["consignes"]=="1" ){
        setcookie('enregistre', "3"); //différent de 0 ou 1
        $fin = true;
        require_once "../model/cookies.php";
        if(isset( $_POST['organisation'])){
            setcookie('organisation', strval(htmlspecialchars($_POST['organisation'])));
        }else{
            setcookie('organisation', "0");
        }
        // il ne faut pas compter sur le cookies pendant cette page. Je pense qu'elles se mettent à jour à la fin de l'execution de la page
        

        require_once "../model/baseDonnees.php";

        $echange = echangeur($PDO);
        
        echo '<!DOCTYPE html>
        <html>
        <head>
            <meta charset="UTF-8">
            <meta name="robots" content="noindex">
            <link rel="stylesheet" href="..\link\style.css">
            <title>Anniv 2023</title>

            <!-- google font -->
            <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk&display=swap" rel="stylesheet">

        </head>
        <body>';
        if ($echange=="1"){
            require_once '../view/erreurDejaInscrit.php';
        }else if($echange=="2"){
            require_once '../view/payement.php';
        }else if($echange=="3"){
            require_once '../view/continuer_payement.php';
        }
    }
    else{ 
        header("Location: inscription.php?inscrit=2"); //il faut accepter les consignes 
        exit;
    }

     
    ?>
    </body>
</html>

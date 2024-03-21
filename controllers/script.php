<?php

    require_once "../model/baseDonnees.php";
    $nom = strval(htmlspecialchars($_COOKIE['nom']));
    $prenom = strval(htmlspecialchars($_COOKIE['prenom']));
    $telephone = strval(htmlspecialchars($_COOKIE['tel']));
    $email = strval(htmlspecialchars($_COOKIE['email']));
    $organisation = ($_COOKIE['organisation']);
    $viens = strval(htmlspecialchars($_COOKIE['viens']));
    // si le nom est déja dans une catégorie différente, on le supprime
    supprimerCategorieDifferente($PDO,$nom,$prenom,$telephone,$email,$organisation,$viens);

    if($_COOKIE["enregistre"] == 0){
        echo '
        <!DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <meta name="robots" content="noindex">
                <link rel="stylesheet" href="..\link\style.css">
                <title>Formulaire</title>
                <!-- google font -->
                <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk&display=swap" rel="stylesheet">
            </head>';
        echo  '<div class="carte " style="margin: 5% 20% 0% 20%;">';
        echo '<h2>Erreur</h2>';
        echo 'Erreur lors de l\'enregistrement des données';
        //var_dump( $pdoStatement->errorInfo() );
        echo '</div>';
    }
    if($_COOKIE["enregistre"] == 1){
        echo '
            <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="UTF-8">
                    <meta name="robots" content="noindex">
                    <link rel="stylesheet" href="..\link\style.css">
                    <title>Formulaire</title>
                    <!-- google font -->
                    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk&display=swap" rel="stylesheet">
                </head>';
            echo  '<div class="carte" style="margin: 5% 20% 0% 20%;text-align:center; display:flex; flex-direction:column">';
            echo '<h2>Succès</h2>';
            echo $prenom." ".$nom.", tu es bien enregistré ! ";
            if ($viens == "1"){
                echo "(présent) <br/>" ;
            }
            else if ($viens == "0"){
                echo "(absent) <br/>" ;
            }
            if ($viens == "attente"){
                echo "(en attente de réponse) <br/>" ;
            }
            echo '<a href="index.php" class="btn btn-seul fond_fonce ecriture_claire ">OK</a>';
            echo '</div>';
    }
    if($_COOKIE["enregistre"] == 3){
        #insertion des donnés dans la base de donnée
        if (insertionBase($PDO,$nom,$prenom,$telephone,$email,$organisation,$viens) == "1"){  
            setcookie('enregistre', "1");
            echo '
            <!DOCTYPE html>
            <html>
                <head>
                    <meta charset="UTF-8">
                    <meta name="robots" content="noindex">
                    <link rel="stylesheet" href="..\link\style.css">
                    <title>Formulaire</title>
                    <!-- google font -->
                    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk&display=swap" rel="stylesheet">
                </head>';
            echo  '<div class="carte" style="margin: 5% 20% 0% 20%;text-align:center; display:flex; flex-direction:column">';
            echo '<h2>Succès</h2>';
            echo $prenom." ".$nom.", tu es bien enregistré ! ";
            if ($viens == "1"){
                echo "(présent) <br/>" ;
            }
            else if ($viens == "0"){
                echo "(absent) <br/>" ;
            }
            if ($viens == "attente"){
                echo "(en attente de réponse) <br/>" ;
            }
            echo '<a href="index.php" class="btn btn-seul fond_fonce ecriture_claire ">OK</a>';
            echo '</div>';
        }else{
            setcookie('enregistre', "0");
            echo '
            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="UTF-8">
                <meta name="robots" content="noindex">
                <link rel="stylesheet" href="..\link\style.css">
                <title>Formulaire</title>
                <!-- google font -->
                <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk&display=swap" rel="stylesheet">
            </head>
            <div class="carte " style="margin: 5% 20% 0% 20%;">
            <h2>Erreur</h2>
            Erreur lors de l\'enregistrement des données';
        //var_dump( $pdoStatement->errorInfo() );
        echo '</div>';
        }
    }   
?>
</html>
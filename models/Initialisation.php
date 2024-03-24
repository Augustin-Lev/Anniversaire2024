<!DOCTYPE php>
<html>
    <head>
    <meta charset="UTF-8">
        <link rel="stylesheet" href="views\style\stylesheet.css">
        <title>Initialisation</title>
        <meta name= "description" content="
        Page d'initialisation'
        ">
    </head>
    <body class="init">
    <?php
        // var_dump($_POST);
        // require "../model/Bdd.php";
        require 'views/bandeau.php';
        function printForm(){
            echo'
            
            <p>En vue de la bonne installation du site, nous vous demandons les information suivantes :<br/>
            - Si un bug persiste au niveau du téléchargement des images, reconfigurez le php.ini et augmentez "upload_max_filesize"<br/>
            - Vérifie que les variables "display_startup_errors" et "display_errors" du php.ini du serveur soit à "OFF" 
            - Vérifie que la variable "upload_max_filesize" soit à 7M </p>
            <form class="loginForm" action="" method="POST" id="newPassword">
                <label for="NameDB">Nom de la base de donnée</label>
                <input type="text" name="NameDB" value="anniversaire2024" required="">
        
                <label for="UserDB">Utilisateur de la base de donnée</label>
                <input type="text" name="UserDB" value="u734868843_augustin" required="">
        
                <label for="passwordDB">Mot de passe de la base de donnée</label>
                <input type="text" name="passwordDB" value="4a:P:N6u:LKZ" required="">
                
                <div id="indiceMDP"> </div>
                <p id="erreur">ERREUR, le mot de passe ne respecte pas les consignes ou n\'est pas identique</p>

                <label for="base_url"> Dossier dans lequel se trouve le site (mettre "")</label>
                <input type="text" name="base_url" value="/anniversaire2024" required="">
        
                <input type="hidden" name="action" value="fillDB" >
                <button class="boutton" type="submit"> remplissage de la base</button>
            </form>
            <script src="views/script/login.js"></script>
            ';
           
        }

        function initialisation($NameDB,$UserDB,$passwordDB){
            echo '<body>
                <h2 >Creation de la base de donnée</h2> 
                <div class="carte" style="margin: 5% 20% 0% 20%;">
                <h2>Action :</h2>
                <ul>';
           

            try {
                $PDO = new PDO('mysql:host=localhost', $UserDB, $passwordDB); //connexion au serveur via les identifiants renseignés
            }catch(PDOExeption $e){
                echo 'Erreur lors de la connection au serveur';
            }
            
            if ($PDO->exec('DROP DATABASE IF EXISTS '.$NameDB) !== false) { //suppression de la base déjà existante
                if ($PDO -> exec('CREATE DATABASE '.$NameDB) !==null){ // création de la nouvelle base
                    echo "<li>création de la base réussi !</li> <br/>";
                    try{
                        $tablePDO = new PDO('mysql:host=localhost;dbname='.$NameDB, $UserDB, $passwordDB); //connexion à la base 
                        echo '<li>liaison à la base de donnée réussie</li><br/>';
                    }catch(PDOExeption $e){
                        echo '<li>echec de la liaison à la base de données</li><br/>';
                    }
                    // création des différentes tables
                    if($tablePDO -> exec('CREATE TABLE Guest (
                        id INT(11) PRIMARY KEY AUTO_INCREMENT,
                        nom VARCHAR(100),
                        prenom VARCHAR(100),
                        tel VARCHAR (100))') !== null){
                            echo "<li>table Guest créée</li><br/>";
                    }else{
                            echo '<li>echec de création de la table Guest</li><br/>';
                    }
                }else{
                    echo '<li>echec de la création de la table</li><br/>';
                }
            }else{
                echo '<li>erreur de suppression de la table</li><br/>';
            }
        
            echo ' </ul>';
            if(isset($_POST["action"])==0){
                echo'
                    <form action="" method=POST>
                        <input name="action" value="fillBdd" style="display:none">
                        <button type=submit class="boutton">Remplir la base de donnée</button>
                    </form>';
            }
            echo '
            <a class="boutton" href="'.substr($_SERVER["HTTP_REFERER"], 0, -7).'/"> Menu </a>
            </div>
            </body>';
        }
       
    ?>
    
    <h1 style="background-color:black">Initialisation</h1>
    <?php 
    printForm();
    // var_dump($_POST);

    if(isset($_POST["action"])){

        if(file_exists("models/connect.csv")){
            unlink('models/connect.csv');
        }
        $fichier = fopen("models/connect.csv", "w");
        fwrite($fichier, "NameDB,UserDB,passwordDB,name,surname,email,password,base_url \r\n");
        fwrite($fichier,$_POST["NameDB"].",".$_POST["UserDB"].",".$_POST["passwordDB"].", - , - , - , - ,".$_POST["base_url"] );
        
        initialisation($_POST["NameDB"],$_POST["UserDB"],$_POST["passwordDB"]);
        
    }


  







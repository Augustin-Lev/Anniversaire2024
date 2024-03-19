
<!DOCTYPE php>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="..\link\style.css">
        <title>Formulaire</title>
    </head>
    <?php 
    if (isset($_GET['admin'])){ 
        echo '<body>
            <h1 class="">Creation de la base de donnée</h1> 

            <div class="carte c-vert" style="margin: 5% 20% 0% 20%;">
            <h2>Action :</h2>
            <ul>';

        try {
            $PDO = new PDO('mysql:host=localhost', 'u734868843_augustin', '4a:P:N6u:LKZ');
        }catch(PDOExeption $e){
            echo 'Erreur lors de la connection à la base de donées';
        }


        if ($PDO->exec('DROP DATABASE IF EXISTS u734868843_anniversaire') !== false) {
            if ($PDO -> exec('CREATE DATABASE u734868843_anniversaire') !==null){
                echo "<li>création de la base réussi !</li> <br/>";
                try{
                    $tablePDO = new PDO('mysql:host=localhost;dbname=u734868843_anniversaire', 'u734868843_augustin', '4a:P:N6u:LKZ');
                    echo '<li>liaison a la base de donnée réussie</li><br/>';
                }catch(PDOExeption $e){
                    echo '<li>echec de la liaison a la base de données</li><br/>';
                }
                if($tablePDO -> exec('CREATE TABLE invites (
                    id INT(11) PRIMARY KEY AUTO_INCREMENT,
                    nom VARCHAR(100),
                    prenom VARCHAR(100),
                    telephone VARCHAR(100),
                    email VARCHAR (100),
                    organisation VARCHAR (1),
                    presence VARCHAR (10))') !== null){
                        echo "<li>table créée</li><br/>";
                    }else{
                        echo '<li>echec de création de la table</li><br/>';
                    }
                
            }else{
                echo '<li>echec de la création de la table</li><br/>';
            }
        }else{
            echo '<li>erreur de suppression de la table</li><br/>';
        }
    echo ' </ul>
    </div>

    </body>';
    }else{ 
   
        header("Location: ../controller/index.php"); 
        exit;
    }
    echo " </html>";
  







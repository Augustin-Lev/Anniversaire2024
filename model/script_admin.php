<?php

    require_once "../model/baseDonnees.php";

    var_dump($_POST);

    if ($_POST["action"] == "supprimer"){
        echo "<script> alert('Vous allez supprimer la personne choisie') </script>";
        $sql ='DELETE FROM `invites` WHERE `invites`.`id` LIKE :id';
        $pdoStatement= $PDO->prepare($sql);
        $pdoStatement->bindValue(':id',$_POST['personne'],PDO::PARAM_STR);
        if($pdoStatement -> execute()) {  
            header("Location:../controller/admin.php?action=1"); //personne supprimée                     
        }
        else{
            header("Location:../controller/admin.php?action=2"); //Erreur personne supprimée      
        }                 
    }

    if ($_POST["action"] == "changer"){
          
        foreach ($PDO-> query('SELECT id, nom, prenom, telephone, email, organisation, presence FROM invites', PDO::FETCH_ASSOC) as $user){
            
            if ($user['id'] === $_POST['personne']){
    
                if ($user['presence'] == $_POST['changement']){
                    header("Location:../controller/admin.php?action=0"); //personne déjà dans catégorie
                }else{
                    //copie dans la nouvelle catégorie
                    $sql ='INSERT INTO invites (nom, prenom, telephone, email, organisation, presence) VALUES ( :nom, :prenom, :tel, :email, :organisation, :presence);';
                    $pdoStatement= $PDO->prepare($sql);
                    $pdoStatement->bindValue(':prenom',$user['prenom'], PDO::PARAM_STR);
                    $pdoStatement->bindValue(':nom',$user['nom'],PDO::PARAM_STR);
                    $pdoStatement->bindValue(':tel',$user['telephone'],PDO::PARAM_STR);
                    $pdoStatement->bindValue(':email',$user['email'],PDO::PARAM_STR);
                    $pdoStatement->bindValue(':organisation',$user['organisation'],PDO::PARAM_STR);
                    $pdoStatement->bindValue(':presence',$_POST["changement"],PDO::PARAM_STR);
                    if($pdoStatement -> execute()) {                  

                        //suppression de l'ancienne catégorie
                        $sql ='DELETE FROM `invites` WHERE `invites`.`id` LIKE :id';
                        $pdoStatement= $PDO->prepare($sql);
                        $pdoStatement->bindValue(':id',$_POST['personne'],PDO::PARAM_STR);
                        if($pdoStatement -> execute()) {    
                            header("Location:../controller/admin.php?action=3"); //Champs bien échangé                          
                        }
                        else{
                            header("Location:../controller/admin.php?action=4"); //Erreur de suppression du champs anterieur   
                        }                 
                    }
                    else{ 
                        header("Location:../controller/admin.php?action=5"); //Erreur lors de la copie du champs  
                    }               
                }

            }
            
        }      
    }
   
    
    
?>
</html>
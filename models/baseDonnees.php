<?php


function recup(){
    try {
        $PDO = new PDO('mysql:host=localhost;dbname='.dbname, UserDB, passwordDB);
    }catch(PDOExeption $e){
        echo 'Erreur lors de la connection à la base de donées';
    }
    $compteur = 0;
    $users = array();
    foreach ($PDO-> query('SELECT nom, prenom, tel FROM guest', PDO::FETCH_ASSOC) as $user){
        $compteur +=1;
        $users[] = $user;
    }
    return $users;
}

function echangeur($PDO){
    
    foreach ($PDO-> query('SELECT nom, prenom, presence FROM invites', PDO::FETCH_ASSOC) as $user){
        //var_dump($user);
        if ($user['nom'] === $_POST['nom'] &&
            $user['prenom'] === $_POST['prenom']){

            if ($user['presence'] == $_POST['viens']){
                if(headers_sent()){
                    echo '<h1> Wo, arrête, tu fais quoi ?!?</h1>';
                }
                return "1"; //Erreur vous êtes déjà inscrit                
            }
            else{
                if ($_POST["viens"] == 1){ 
                    return "2"; //j'ai déjà payé VS je n'ai pas encore payé     
                }
                header("Location: script.php"); 
                exit;
            }
            
        }
    }
    
    if ($_POST["viens"] == 1){
        return "2"; //j'ai déjà payé VS je n'ai pas encore payé
    }
    else {
        return "3"; //continuer payement
        
    }
}
function supprimerCategorieDifferente($PDO,$nom,$prenom,$telephone,$email,$organisation,$viens){
    // si le nom est déja dans une catégorie différente, on le supprime
    foreach ($PDO-> query('SELECT nom, prenom, presence FROM invites', PDO::FETCH_ASSOC) as $user){
        if ($user['nom'] === $nom && $user['prenom'] === $prenom && $user['presence'] != $viens ){
            if(headers_sent()){
                echo '<h1> Wo, arrête, tu fais quoi ?!?</h1>';
            }
            else{
                $sql ='DELETE FROM `invites` WHERE `invites`.`nom` LIKE :nom AND  `invites`.`prenom` LIKE :prenom';
                $pdoStatement= $PDO->prepare($sql);
                $pdoStatement->bindValue(':nom',$nom,PDO::PARAM_STR);
                $pdoStatement->bindValue(':prenom',$prenom, PDO::PARAM_STR);
                if($pdoStatement -> execute()) {                        
                }
                else{
                    echo  'ERREUR au niveau de la suppression du nom de la section anterieure';
                }  
            }                    
            
        }
    }
}

function insertionBase($nom,$prenom,$telephone){
    echo 'mysql:host=localhost;dbname='.dbname.UserDB.passwordDB;
    try {
        $PDO = new PDO('mysql:host=localhost;dbname='.dbname, UserDB, passwordDB);
    }catch(PDOExeption $e){
        echo 'Erreur lors de la connection à la base de donées';
    }

    foreach ($PDO-> query('SELECT tel FROM Guest', PDO::FETCH_ASSOC) as $user){
        if ($user['tel'] === $telephone){
            if(headers_sent()){
                echo '<h1> Wo, arrête, tu fais quoi ?!?</h1>';
            }
            else{
                $sql ='DELETE FROM `Guest` WHERE `Guest`.`tel` LIKE :telephone';
                $pdoStatement= $PDO->prepare($sql);
                $pdoStatement->bindValue(':telephone',$telephone,PDO::PARAM_STR);
                if($pdoStatement -> execute()) {                        
                }
                else{
                    echo  'ERREUR au niveau de la suppression du nom de la section anterieure';
                }  
            }                    
        }
    }

    $sql ='INSERT INTO Guest (nom, prenom, tel) VALUES ( :nom, :prenom, :tel);';
    $pdoStatement= $PDO->prepare($sql);
    $pdoStatement->bindValue(':prenom',$prenom, PDO::PARAM_STR);
    $pdoStatement->bindValue(':nom',$nom,PDO::PARAM_STR);
    $pdoStatement->bindValue(':tel',$telephone,PDO::PARAM_STR);

    if($pdoStatement -> execute()) { 
        return "1";                
    }
    return "0";
}


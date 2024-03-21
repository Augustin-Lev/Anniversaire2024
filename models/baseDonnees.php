<?php

try {
    $PDO = new PDO('mysql:host=localhost;dbname=u734868843_anniversaire', 'u734868843_augustin', '4a:P:N6u:LKZ');
}catch(PDOExeption $e){
    echo 'Erreur lors de la connection à la base de donées';
}


function compteurPresence($PDO){
    $compteur = 0;
    foreach ($PDO-> query('SELECT nom, prenom FROM invites WHERE presence = 1 OR presence = "attente"', PDO::FETCH_ASSOC) as $user){
        $compteur +=1;
    }
    return $compteur;
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

function insertionBase($PDO,$nom,$prenom,$telephone,$email,$organisation,$viens){
    $sql ='INSERT INTO invites (nom, prenom, telephone, email, organisation, presence) VALUES ( :nom, :prenom, :tel, :email, :organisation, :presence);';
    $pdoStatement= $PDO->prepare($sql);
    $pdoStatement->bindValue(':prenom',$prenom, PDO::PARAM_STR);
    $pdoStatement->bindValue(':nom',$nom,PDO::PARAM_STR);
    $pdoStatement->bindValue(':tel',$telephone,PDO::PARAM_STR);
    $pdoStatement->bindValue(':email',$email,PDO::PARAM_STR);
    $pdoStatement->bindValue(':organisation',$organisation,PDO::PARAM_STR);
    $pdoStatement->bindValue(':presence',$viens,PDO::PARAM_STR);
    if($pdoStatement -> execute()) { 
            
        if($organisation == "10"){
            $message = 
            '<html>
            <head>
                <title>Nouvel Organisateur !!</title>
            </head>
            <body>
                <h1>Nouvel Organisateur !! </h1>
                <p>'. $prenom.' '.$nom.' souhaite faire partie de l\'organisation de notre anniversaire !</p>
               
                <p>Rajoute cette personne au groupe !</p>
                
                <p>Tel : '.$telephone.'</p>
            </body>
            </html>';
            
            $headerMail ='From: '.$email . "\r\n" .
            'MIME-Version: 1.0'. "\r\n" .
           'Content-type: text/html; charset=iso-8859-1';
            if(mail('augustin.levasseur@etu.unilasalle.fr,marie.levasseur@etu.unilasalle.fr','Organisation Anniversaire',$message,$headerMail)){
            }else{
                echo'Merci de prévenir Marie ou Augustin par mail ;)';
            }
        }
        return "1";                
    }
    return "0";
}


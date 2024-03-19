<?php
try {
    $PDO = new PDO('mysql:host=localhost;dbname=u734868843_anniversaire', 'u734868843_augustin', '4a:P:N6u:LKZ');
}catch(PDOExeption $e){
    echo 'Erreur lors de la connection à la base de donées';
}


$fichier = fopen('../bdd/'.date("Y.m.d")."-".date("H.i.s").'data.csv', 'w');
$ligne = "ID;nom;prenom;telephone;email;organisation;presence\n";
fwrite($fichier, $ligne);
foreach ($PDO-> query('SELECT id, nom, prenom, telephone, email, organisation, presence  FROM invites', PDO::FETCH_ASSOC) as $user){
    $ligne = $user["id"].";".$user["nom"].";".$user["prenom"].";".$user["telephone"].";".$user["email"].";".$user["organisation"].";".$user["presence"]."\n";
    fwrite($fichier, $ligne);
}
fclose($fichier);

?>
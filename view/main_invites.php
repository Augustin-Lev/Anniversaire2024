<main class="fond_fonce">

    <br/>
    <br/>
    <br/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
 
    <div class="container compteur fond_clair ecriture_fonce">
        <h2>
            <?php echo compteurPresence($PDO)?>
        </h2>
        <p style="text-align:center">Potentiellement présents</p>
    </div>

    <?php
    $h2 = ['Seront présents :','Seront absents :','Ne savent pas :'];
    $presence = ['"1"','"0"','"attente"'];
    for ($i=0; $i<3; $i++){
        echo '<div  class="tableInscris fond_clair ecriture_fonce">';
        echo "<h2>".$h2[$i]."</h2>";
        echo '<table class="table ">
            <thead>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
            </thead>';
            foreach ($PDO->query('SELECT nom,prenom from invites WHERE  presence = '.$presence[$i], PDO::FETCH_ASSOC) as $invite){
                echo "<tr><td>".$invite['nom']."</td><td>".$invite['prenom']."</td></tr>";
            }
        echo '</table>';
        echo '</div>';
    }
    ?>
</main>
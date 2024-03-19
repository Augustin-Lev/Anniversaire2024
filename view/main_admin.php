<main class="fond_fonce centrageInscription ">
    <div>

    
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>

    <h1 class="ecriture_claire">Administration</h1>  
    
    <form method="post" action="../model/script_admin.php" >
    <p class ="ecriture_claire">Choisir la personne et selectionner "supprimer" ou "changer" en ayant selectioné un autre champ pour le déplacer dans cette catégorie</p>

    <table class="champsInscription">
            
            <tr><td>
                <label for="nom">Identification</label>
            </td><td>
            <select name="personne" id="personne">
                <?php
                    foreach ($PDO-> query('SELECT id, nom, prenom, presence FROM invites', PDO::FETCH_ASSOC) as $user){
                        echo '<option value="'.$user["id"].'">'.$user["nom"].'-'.$user["prenom"].'</option>';
                    }
                ?>
            </select>
            </td></tr>
    
            <tr><td>
                <label for="prenom">Destination</label>
            </td>
            <td>
                <select name="changement" id="changement">
                    <option value="0">Ne viens pas</option>
                    <option value="attente">En attente</option>
                    <option value="1">Viens</option>
                </select>
            </td></tr>
     
            <tr><td>
                <button class="btn-index fond_clair ecriture_fonce" type="submit" name = "action" value ="changer">Changer</button>
            </td>
            <td>
                <button class="btn-index fond_clair ecriture_fonce" type="submit" name = "action" value ="supprimer">Supprimer</button>

            </td></tr>
    
    
            </table> 





    
    
    </form>

    </div>
</main>



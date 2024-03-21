<main class="fond_fonce centrageInscription ">
    <div>

    
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>

    <h1 class="ecriture_claire">Inscription</h1>  
    
    <form method="post" action="../controller/payement.php" >
    <p class ="ecriture_claire">Pour modifier votre choix (présent, absent ou ne sais pas), reprenez les mêmes identifiants (nom, prénom)</p>
    <?php 
        
        if(isset ($_GET['inscrit']) && $_GET['inscrit'] == 1){         
            echo  '<div style="margin: 5% 20% 0% 20%;text-align:center; display:flex; flex-direction:column">';
            echo '<h2 class="">Erreur mon Brave</h2>
            <p >Vous avez déjà été enregistré !!</p>
            </div>';
            echo '<a href="inscription.php" class="btn btn-seul fond_clair ecriture_fonce ">OK</a>';
            echo '</div>';
        }

        else if(isset ($_GET['inscrit']) && $_GET['inscrit'] == 2){    
            echo  '<div style="margin: 5% 20% 0% 20%;text-align:center; display:flex; flex-direction:column">';
            echo '<div class=" btn btn-seul fond_clair ecriture_fonce" >';
            echo '<h2 class="">Erreur mon Brave</h2>
            <p >Il faut accepter les consignes !!</p>
            </div>';
          
            echo '<a href="inscription.php" class="btn btn-seul fond_clair ecriture_fonce ">OK</a>';
            echo '</div>';
        }

    ?>

        <table class="champsInscription">
            
        <tr><td>
            <label for="nom" >Nom</label>
        </td></tr>
        <tr><td>
            <input <?php if(isset($nom)){ echo 'value = "'.$nom.'"'; } ?> class="champ" required=" " type="text" id="nom" name="nom" value="" placeholder="de Montmirail" maxlength="32">
        </td></tr>

        <tr><td>
            <label for="prenom">Prénom</label>
        </td></tr>
        <tr><td>
            <input <?php if(isset($prenom)){ echo 'value = "'.$prenom.'"'; } ?> class="champ" required=" " type="text" id="prenom" name="prenom" placeholder="Godefroy" maxlength="30">
        </td></tr>
 
        <tr><td>
            <label for="tel">Téléphone</label>
        </td></tr>
        <tr><td>
            <input <?php if(isset($tel)){ echo 'value = "'.$tel.'"'; } ?> class="champ" type="tel" id="tel" name="tel" pattern='[0-9]{10}'required=" " placeholder="0766540330">
        </td></tr>

        <tr><td>
            <label for="mail">Mail</label>
        </td></tr>
        <tr><td>
            <input <?php if(isset($email)){ echo 'value = "'.$email.'"'; } ?> class="champ" type="email" id="mail" name="email" required="@" placeholder="jaidebonneschausses@montmirail.com" maxlength="100">
        </td></tr>

        <tr><td>
            <input class="checkbox" type="checkbox" id="consignes" name="consignes" value= 1>
            <label for="consignes">J'ai lu et j'approuve les consignes <a href="consigne.php" target="_blank">ci-jointes</a></label>
        </td></tr>
        <tr><td>
            <div class="parent">    
                <input class="checkbox" type="checkbox" id="organisation" name="organisation" value= 1>
                <label for="organisation">Je souhaite participer à l'organisation </a></label>
            </div>
        </td></tr>   


        </table> 
               
        
        <div class="container btn-container">
            <button class="btn-index fond_clair ecriture_fonce" type="submit" name = "viens" value ="1">Je participe</button>
            <button class="btn-index fond_clair ecriture_fonce" type="submit" name = "viens" value ="attente">Je ne sais pas encore </button> 
            <button class="btn-index fond_clair ecriture_fonce" type="submit" name = "viens" value ="0">Je ne peux pas venir </button>            
           
        </div>
    
  
    </form>
    <script>

    </script>
    </div>
</main>



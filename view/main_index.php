<main>

        
   
            <?php if(isset ($_GET['success']) && $_GET['success'] == 1){            
                echo  '<div class="carte" style="margin: 5% 20% 0% 20%;text-align:center; display:flex; flex-direction:column">';
                echo '<h2>Succès</h2>';
                echo "Tu es bien enregistré ! ";
                echo '<a href="index.php" class="btn btn-seul fond_fonce ecriture_claire ">OK</a>';
                echo '</div>';
            }
            ?>
        

        <div id="top" class="fond_clair">
            <div class="titrePrincipal">
                <h1>VENEZ FÊTER NOS ANNIVERSAIRES !!</h1>
                <p class="attache">Levasseur</p>
            </div>
            <div class="image">
              
                <!--<img class="image" src="image/champagne.jpg">-->
            </div>
            
        </div>  

        <div class="intro">
            <div class= "tel-c-fonce">
                <div>
                    <h1 class="age">
                        18
                    </h1>
    
                </div>
                
                <p>Adrien</p>
            </div>

            <div class= "tel-c-clair">
                <div>
                    <h1 class="age">
                        20
                    </h1>
    
                </div>
                
                <p>Marie</p>
            </div>

            <div class= "tel-c-fonce">
                <div>
                    <h1 class="age">
                        21
                    </h1>
    
                </div>
                
                <p>Augustin</p>
            </div>
        </div>
        

        <div class="fond_fonce ecriture_claire paragraphe fond_bouclier" style="padding-bottom: 4rem;">
            
            <div>
                <h2>Introduction</h2>
                <br/>
                <p class="justifier">Bien que nos anniversaires soient respectivement le <span>10 mai</span>, le <span>10 avril</span> et le <span>30 janvier</span>, nous souhaitons fêter nos anniversaires en été. <br/>
                Pour fêter nos 18, 20 et 21 ans, nous vous invitons donc à la maison à Etrelles pour un week-end de folie ! <br/>
                Au programme, camping, rigolade, grand jeu, barbecue et surtout revoir les coupaings  !!<br/>
                Si vous avez déjà pu venir l'année dernière, nous vous garantissons que cette année, sera encore plus folle !
                Il vous est cepandant demandé d'amener de quoi vous hydrater (exemple : bière)    
            </p>

                <div class="container btn-container" style="justify-content:center">
                    <a href="inscription.php" class="btn-index fond_clair ecriture_fonce">Inscription</a>
                    <a href="consigne.php" class="btn-index fond_clair ecriture_fonce">Consignes</a>
                    <a href="invites.php" class="btn-index fond_clair ecriture_fonce">Inscrits</a>
                </div>
            </div>
        </div>

        <div class="fond_clair ecriture_fonce paragraphe">
            <div class="carte ecran">
                <h2>Carte</h2>
                <br/>
                <img width=100% src="../image/carte.png" alt="carte Umap montrant l'emplacement prévu des infrastructures">
                <a href=http://umap.openstreetmap.fr/fr/map/wep_726652#18/48.56136/3.86975 target="_blank" class="btn fond_fonce ecriture_claire"> Lien Umap </a>
            </div>
        </div>

        <div class="fond_fonce ecriture_claire paragraphe fond_chevalier">
            <div class="carte" >
            <h2 id="Planning">Planning</h2>
            <br/>
            <table class="table">
                <tr>
                    <td>
                    </td>
                    <td>
                        Vendredi
                    </td>
            
                    <td>
                        Samedi
                    </td>
                    <td>
                        Dimanche
                    </td>
                </tr>

                <tr>
                    <td>
                        10h30
                    </td>
                    <td>
                        
                    </td>
                    <td>
           
                    </td>
                    <td>
                        Messe
                    </td>
                </tr>

                <tr>
                    <td>
                        11h
                    </td>
                    <td>
                        
                    </td>
                    <td>
                        Début du grand jeu
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td>
                        17h
                    </td>
                    <td>
                        Arrivée
                    </td>
                    <td>
                        Temps chill (Piscine / Foot / Volley / ...)
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td>
                        20h
                    </td>
                    <td>
                        Repas <br/>
                        Discours
                    </td>
                    <td>
                        Repas <br/>
                        Discours
                    </td>
                    <td>

                    </td>
                </tr>

                <tr>
                    <td>
                        21h
                    </td>
                    <td>
                        Chasse à l'Homme
                    </td>
                    <td>
                        Grosse soirée
                    </td>
                    <td>

                    </td>
                </tr>
            </table>
        </div>
        </div>

        <div class="fond_clair ecriture_fonce image-carte">
            <div class="index-cote-carte" >
                <img width = 100% src="../image/carte3.png" alt="image de la carte présentant l'arrivée des voitures">
            </div>
            
            <div class="index-cote-carte">
                <h2>Arrivée (voiture)</h2>
                <br/>
                <ol >
                    <li> <p>Déposer les boissons pour qu'elles soient au frais </p></li>
                    <li> <p>Passer par derrière pour revenir déposer les tentes, passagers et toutes les affaires </p></li>
                    <li> <p>Garer les voitures dans le pré </p></li>
                </ol>

            </div>
            
        </div>

        <div class="fond_fonce ecriture_claire paragraphe fond_lune">
            <div class="carte">
                <h2>Thème</h2>
                <br/>
                <p class="justifier">Le thème du week-end sera...LE RETOUR DES VIKINGS !<br/>
                Prenez vos meilleurs costumes pour le jeu, la soirée et tout le week-end. Ramenez vos halbardes, vos drakars et vos boucliers !
                Nb : amenez-les dans vos affaires, on se déguisera au moment du jeu. <br/>
                Que Dieu bénisse la France !
                <br/>
                <br/>
                <!--<img width=100% src="image/medieval.png">-->
            </div>
        </div>
            
    </main>
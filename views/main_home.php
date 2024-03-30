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
            
                <h1>31 mai au 2 juin</h1>
                <h3 class="attache">Anniversaires Levasseur</h3>
                
            </div>
            <div class="image">
              
                <!--<img class="image" src="image/champagne.jpg">-->
            </div>
            
        </div>  

        <div class="introduction ecriture_claire">
            
            <div>
                <h2>Introduction</h2>
                <br/>
                <p class="justifier">Bien que nos anniversaires soient respectivement le <span>10 mai</span>, le <span>10 avril</span> et le <span>30 janvier</span>, nous souhaitons fêter nos anniversaires en été. <br/>
                Pour fêter nos 18, 20 et 21 ans, nous vous invitons donc à la maison à Etrelles pour un week-end de folie ! <br/>
                Au programme, camping, rigolade, grand jeu, barbecue et surtout revoir les coupaings  !!<br/>
                Si vous avez déjà pu venir l'année dernière, nous vous garantissons que cette année, sera encore plus folle !
                Il vous est cependant demandé d'amener de quoi vous hydrater (exemple : bière)    
            </p>
            </div>
        </div>


        <div class="fond_clair ecriture_fonce image-carte">
            <div class="index-cote-carte" >
                <img width = 100% src="<?php echo BASE_URL;?>/views/image/voiture.jpg" alt="image de la carte présentant l'arrivée des voitures">
            </div>
            
            <div class="index-cote-carte">
                <h2>Les choses à emporter</h2>
                <br/>
                <ul >
                    <li> <p>une tente + duvet + matelas</p></li>
                    <li> <p>des habits d'été (short) + baskets</p></li>
                    <li> <p>Une tenue qui ne crains rien (treilli / pantalon recommandé) + baskets qui ne craignent pas</p></li>
                    <li> <p>Lampe torche pour la chasse à l'Homme</p></li>
                    <li> <p>Des bières</p></li>
             
                </ul>

            </div>
            
        </div>

        <div class="fond_clair ecriture_fonce image-carte">
            <div class="index-cote-carte">
                <h2>Le lieux</h2>
                <br/>
                <p>Vous êtes cordialement invité à la ferme à Etrelles !<br/><br/>
                1 route de soissons<br/>
                10170 Etrelles sur Aube</p>

                <ul >
                    <li> <p>Gare la plus proche : Romilly sur seine</p></li>
                    <li> <p>Pour les covoiturages, vous organiser via l'excel suivant</p></li>
                </ul>
                <div class="container btn-container" style="justify-content:center">
                    <a target="_blank" href="https://docs.google.com/spreadsheets/d/1KR4ZQU6QpXiDZF3VZB60Bl4e2SJNC0eHgtIqVwwfhl4/edit?usp=sharing" class="btn-index fond_fonce ecriture_claire">Covoiturage</a>                  
                </div>

            </div>
            <div class="index-cote-carte" >
                <img width = 100% src="<?php echo BASE_URL;?>/views/image/ad+guss.jpg" alt="image de la carte présentant l'arrivée des voitures">
            </div>
            
        </div>
        <div class="fond_clair ecriture_fonce image-carte">
            <div class="index-cote-carte" >
                <img width = 100% src="<?php echo BASE_URL;?>/views/image/maman.jpg" alt="image de la carte présentant l'arrivée des voitures">
            </div>
            
            <div class="index-cote-carte">
                <h2>Les Photos</h2>
                <br/>
                <p>N'hésitez pas à partager les photos lors de l'évènement, elles seront stockés sur google photo</p>
                <div class="container btn-container" style="justify-content:center">
                    <a target="_blank" href="https://photos.app.goo.gl/FeWY2bZgSDQP5mJJ6" class="btn-index fond_fonce ecriture_claire">2021</a>
                    <a target="_blank" href="https://photos.app.goo.gl/N8DPPzutkapPgktz7" class="btn-index fond_fonce ecriture_claire">2023</a>             
                    <a target="_blank" href="https://photos.app.goo.gl/3y4qPRGcSTSfEFn97" class="btn-index fond_fonce ecriture_claire">2024</a>                               
                </div>  
                
                

            </div>
            
        </div>

        <div class="fond_fonce ecriture_claire paragraphe fond_chevalier">
            <div >
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
                <img width = 100% src="<?php echo BASE_URL;?>/views/image/carte3.png" alt="image de la carte présentant l'arrivée des voitures">
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
        
        <div class="fond_clair ecriture_fonce paragraphe">
            <div class="carte ecran">
                <h2>Carte</h2>
                <br/>
                <img width=100% src="<?php echo BASE_URL;?>/views/image/carte.png" alt="carte Umap montrant l'emplacement prévu des infrastructures">
                <a href=http://umap.openstreetmap.fr/fr/map/wep_726652#18/48.56136/3.86975 target="_blank" class="btn fond_fonce ecriture_claire btn-index"> Lien Umap </a>
            </div>
        </div>
        
            
    </main>
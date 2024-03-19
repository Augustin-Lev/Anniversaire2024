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
                <p class="attache">Marie et Augustin</p>
            </div>
            <div class="image">
              
                <!--<img class="image" src="image/champagne.jpg">-->
            </div>
            
        </div>  

        <div class="intro">
            <div class= "tel-c-fonce">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" fill="currentColor" class="zoom bi bi-calendar-check-fill" viewBox="0 0 16 16">
                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
                    </svg>
                </div>
                
                <p>Dès vendredi 30/06</p>
            </div>

            <div class= "tel-c-clair">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" fill="currentColor" class="zoom bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                    </svg>
                </div>
                <p>1 route de Soissons 10170 Etrelles-sur-Aube</p>
            </div>

            <div class= "tel-c-fonce">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="300" height="300" fill="currentColor" class="zoom bi bi-currency-euro" viewBox="0 0 16 16">
                        <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
                    </svg>
                </div>
                <p>Participation : 15€</p>
            </div>
        </div>
        

        <div class="fond_fonce ecriture_claire paragraphe fond_bouclier" style="padding-bottom: 4rem;">
            
            <div>
                <h2>Introduction</h2>
                <br/>
                <p class="justifier">Bien que nos anniversaires soient respectivement le <span>10 avril</span> et le <span>30 janvier</span>, nous souhaitons fêter nos anniversaires en été. <br/>
                Pour fêter nos 19 et 20 ans, nous vous invitons donc à la maison à Etrelles pour un week-end de folie ! <br/>
                Au programme, camping, piscine, rigolade, grand jeu, barbecue et surtout revoir les coupaings  !!<br/>
                Le budget étant assez conséquent, une participation de 15€ vous sera demandée. Elle permettra de financer la sono, les repas et l'organisation en général. <br/>
                Il sera demandé à certains d'entre vous de réaliser un <a href='consigne.php#discours'> Discours </a>. Si vous êtes volontaire dites-le nous !<br/>
                Nous recherchons aussi des personnes pour organiser et gérer l'événement (sécu / logistique / repas / animation)<br/><br/>
                N'hésitez pas à envoyer vos photos dossier, vidéos à Hombeline (<a href='mailto:hombeline.lev@gmail.com' target ="_blank">hombeline.lev@gmail.com</a>). Elles seront passés sur un diaporama pendant le Weekend.</p>

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
                <p class="justifier">Le thème du week-end sera...EPOQUE MEDIEVALE !<br/>
                Prenez vos meilleurs costumes pour le jeu, la soirée et tout le week-end. Ramenez vos épées, vos cottes de maille, vos fléaux d'armes, vos carquois et vos écus, vos rapières ainsi que vos destriers et vos mules !
                Que Dieu bénisse la France !
                <br/>
                <br/>
                <!--<img width=100% src="image/medieval.png">-->
            </div>
        </div>
            
    </main>
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
                    <p class= "index-ans" > ans</p>
                </div>
                <p>Adrien</p>
            </div>

            <div class= "tel-c-clair">
                <div>
                    <h1 class="age">
                        20
                    </h1>
                    <p class= "index-ans" > ans</p>    
                </div>
                
                <p>Marie</p>
            </div>

            <div class= "tel-c-fonce">
                <div>
                    <h1 class="age">
                        21
                    </h1>
                    <p class= "index-ans" > ans</p>
                </div>
                
                <p>Augustin</p>
            </div>
        </div>
        
        <div class="fond_fonce ecriture_claire paragraphe fond_bouclier" style="padding-bottom: 4rem;">
            
            <div>
                
                <h2>Connexion</h2>
                <br/>
                <p class="justifier">Veuillez vous connecter pour accéder aux informations de l'anniversaire. Votre numéro de téléphone sera utilisé afin de mettre à jour les contacts Levasseur. <br/><br/><br/><br/>
                <a href="<?php echo BASE_URL;?>/connexion " class="btn fond_clair ecriture_fonce">Se connecter</a>
            </p>                
            </div>
             
        </div>
            
    </main>
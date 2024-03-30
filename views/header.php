<header>
    <nav class="container fond_clair ordinateur "> 
        <a class="logo " href="<?php echo BASE_URL;?>/">
            <div class="tel">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>
                <p>
                    MENU
                <p>
            </div>
            <div class="ordinateur "> 
                1-2 juin 2024
            </div> 
        </a>                   
        
        <ul class="childTwo ">
            <li class="">
                <a href="<?php echo BASE_URL;?>/" class="nav-link text-dark">MENU</a>
            </li>
            <!-- 
            <li class="">
                <a href="inscription.php" class="nav-link text-dark">Inscription</a>
            </li>
            <li class="">
                <a href="consigne.php" class="nav-link text-dark active">Consignes</a>
            
            <li class="">
                <a href="invites.php" class="nav-link text-dark">Inscrits</a>
            </li>
            </li> -->

            <li class="">
                <a href="<?php echo BASE_URL;?>/groupe" class="nav-link text-dark">Groupe whatsapp</a>
            </li>
        

            <?php if(isset($_COOKIE["organisateur"]) || (isset($_COOKIE["organisateur"])&& $_COOKIE["organisation"]== 1)) {
            echo '
            <li class="">
                 <a href="'.BASE_URL.'\organisation" class="nav-link text-dark">Orga</a>
             </li>';

            }?> 

             
               
        </ul>
        <div class=child-three>

        <?php if(isset($_SESSION["login"])) {
            if ($_SESSION["login"]==1){
                echo '
                <a class="nom-login" href="'.BASE_URL.'/connexion">
                    <p>'.$_SESSION["nom"].'</p>
                    <p/>'.$_SESSION["prénom"].'</p>
                 </a>
                ';
            }else{
                echo'
                <a class=" btn-login" href="'. BASE_URL.'/connexion">
                <svg xmlns="http://www.w3.org/2000/svg" fill="black" height=auto class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
                </svg>
                </a>
                ';
            }
        }else{
            echo'
            <a class=" btn-login" href="'. BASE_URL.'/connexion">
            <svg xmlns="http://www.w3.org/2000/svg" fill="black" height=auto class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
            </svg>
            </a>
            ';
        }
        ?>
        </div>

    </nav>



    <nav class="container fond_clair telephone"> 
        <div class="bandeau-tel">
            <p class = "droite">
                <a href="<?php echo BASE_URL;?>/menu" class="ecriture_fonce">MENU</a>
            </p>
            <div class="survole parent">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="pointsHeader gauche bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>

                <div class="deroulant enfant">
                    <table>
                        <tr>
                            <td class="caseHeader">
                                <a href="<?php echo BASE_URL;?>/menu" class="nav-link text-dark">Menu</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="caseHeader">
                                <a href="<?php echo BASE_URL;?>/connexion" class="nav-link text-dark">Connexion</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="caseHeader">
                                <a href="<?php echo BASE_URL;?>/groupe" class="nav-link text-dark">Groupe Whatsapp</a>
                            </td>
                        </tr>
                        <?php if(isset($_COOKIE["organisateur"]) || (isset($_COOKIE["organisateur"])&& $_COOKIE["organisation"]== 1)){
                            echo '<tr>
                            <td class="caseHeader">
                                <a href="organisation.php" class="nav-link text-dark">Organisation</a>
                            </td>
                        </tr>
                        ';

                        }?>    
                    </table>
                </div>

            </div>
        </div>           
    </nav>
</header>
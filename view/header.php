<header>
    <nav class="container fond_clair ordinateur "> 
        <a class="logo " href="index.php">
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
                <a href="index.php" class="nav-link text-dark">Inscription</a>
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
                <a href="groupe.php" class="nav-link text-dark">Groupe whatsapp</a>
            </li>
            <?php if(isset($_COOKIE["organisateur"]) || (isset($_COOKIE["organisateur"])&& $_COOKIE["organisation"]== 1)) {
            echo '
            <li class="">
                 <a href="organisation.php" class="nav-link text-dark">Orga</a>
             </li>';

            }?>     
               
        </ul>
       
    </nav>

    <nav class="container fond_clair telephone"> 
        <div class="bandeau-tel">
            <p class = "droite">
                <a href="index.php" class="ecriture_fonce">MENU</a>
            </p>
            <div class="survole parent">
                <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="pointsHeader gauche bi bi-three-dots-vertical" viewBox="0 0 16 16">
                    <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                </svg>

                <div class="deroulant enfant">
                    <table>
                        <tr>
                            <td class="caseHeader">
                                <a href="index.php" class="nav-link text-dark">Présentation</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="caseHeader">
                                <a href="inscription.php" class="nav-link text-dark">Inscription</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="caseHeader">
                                <a href="consigne.php" class="nav-link text-dark active">Consignes</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="caseHeader">
                                <a href="invites.php" class="nav-link text-dark">Inscrits</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="caseHeader">
                                <a href="groupe.php" class="nav-link text-dark">Groupe Snap</a>
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
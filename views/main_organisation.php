<main class ="fond_fonce">
<br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>
    <br class="tel"/>

    <h1 class="ecriture_claire">Organisation</h1> 
    
    <div class="container btn-container" style="justify-content:center">
        <a target="_blank" href="https://cloudlasalle-my.sharepoint.com/:f:/g/personal/augustin_levasseur_etu_unilasalle_fr/EqSNa-dYrSFDnai9qi6sGqYBzst-8hjPxQNFo6KULG6Jrg" class="btn-index fond_clair ecriture_fonce">OneDrive</a>
        
        <a target="_blank" href="https://www.canva.com/design/DAF_hpN8KYY/K4Tqp8WSloffHLnqiXUI5Q/edit?utm_content=DAF_hpN8KYY&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" class="btn-index fond_clair ecriture_fonce">Canva</a>

        <a target="_blank" href="https://cloudlasalle-my.sharepoint.com/:x:/g/personal/marie_levasseur_etu_unilasalle_fr/Ebusa5WQMmJAnZlOC_a5-5UBu4mLo1MZf3Lg053NWLRt0w?e=QJED5j" class="btn-index fond_clair ecriture_fonce">Menu</a>
    </div>  

    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/1.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/2.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/3.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/4.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/5.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/6.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/7.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/8.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/9.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/10.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/11.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/12.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/13.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/14.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/15.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/16.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/17.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/18.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/19.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/20.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/21.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/22.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/23.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/24.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/25.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/26.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/27.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/28.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/29.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/30.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/31.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/32.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/33.png" alt='image pour orga'>
    </div>
    <div class="orgaParent">
        <img src= "<?php echo BASE_URL;?>/views/image/34.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/35.png" alt='image pour orga'>
        <img src= "<?php echo BASE_URL;?>/views/image/36.png" alt='image pour orga'>
    </div>

    <h2 class="ecriture_claire">Personnes inscrites</h2>
    <table class="tableInscris">
    <?php
    foreach ($inscrits as $personne ){
        echo "<tr><td>".$personne['nom']."</td><td>".$personne['prenom']."</td><td>".$personne['tel']."</td></tr>";
    }
    ?>
    </table>

</main>


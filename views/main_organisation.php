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
        <a target="_blank" href="https://cloudlasalle-my.sharepoint.com/:x:/g/personal/augustin_levasseur_etu_unilasalle_fr/ERwYUmFlt3lKiOBlce-SjgIB50XMRP9FyV51rTnejuZxWA?e=gbgwLA" class="btn-index fond_clair ecriture_fonce">Liste invité de base</a>
        
        <a target="_blank" href="https://www.canva.com/design/DAF_hpN8KYY/K4Tqp8WSloffHLnqiXUI5Q/edit?utm_content=DAF_hpN8KYY&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" class="btn-index fond_clair ecriture_fonce">Canva</a>
        
        <a target="_blank" href="https://cloudlasalle-my.sharepoint.com/:x:/g/personal/augustin_levasseur_etu_unilasalle_fr/EeriWQD22HtOjdos4xLadicBLrsvEBgtGa7i0sJTzGCH8A?e=Dthczl" class="btn-index fond_clair ecriture_fonce">Prévisions Budgetaire</a>
        
        <a target="_blank" href="https://cloudlasalle-my.sharepoint.com/:f:/g/personal/augustin_levasseur_etu_unilasalle_fr/EqSNa-dYrSFDnai9qi6sGqYBdBRk4UMI-fX_nKNCimWjwg?e=GbqGWx" class="btn-index fond_clair ecriture_fonce">Musiques localisés</a>
   
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
    
    <h2 class="ecriture_claire">Personnes inscrites</h2>
    <table class="tableInscris">
    <?php
    foreach ($inscrits as $personne ){
        echo "<tr><td>".$personne['nom']."</td><td>".$personne['prenom']."</td><td>".$personne['tel']."</td></tr>";
    }
    ?>
    </table>

</main>


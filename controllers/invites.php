<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="..\link\style.css">
        <title>Anniv 2023</title>
        <meta name= "description" content="
        La liste des invités à notre anniversaire est constitué sur cette page !!
        ">

        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk&display=swap" rel="stylesheet">

    </head>
    <body>
    <?php
        require_once "../model/baseDonnees.php";
        require "../view/header.php";
        require_once "../view/main_invites.php";
        require "../view/footer.php";
    ?>
    </body>
</html>
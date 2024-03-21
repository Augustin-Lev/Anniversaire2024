<?php
if(isset($_COOKIE['nom'])){
    setcookie('nom', "");
}
if(isset($_COOKIE['prenom'])){
    setcookie('prenom', "", time() - 3600);
}
if(isset($_COOKIE['tel'])){
    setcookie('tel', "", time() - 3600);
}
if(isset($_COOKIE['email'])){
    setcookie('email', "", time() - 3600);
}
if(isset($_COOKIE['viens'])){
    setcookie('viens',"", time() - 3600);
}



setcookie('nom', strval(htmlspecialchars(strtoupper($_POST['nom']))));
setcookie('prenom', strval(htmlspecialchars(ucfirst(strtolower($_POST['prenom'])))));
setcookie('tel', strval(htmlspecialchars($_POST['tel'])));
setcookie('email', strval(htmlspecialchars($_POST['email'])));
setcookie('viens', strval(htmlspecialchars($_POST['viens'])));
?>
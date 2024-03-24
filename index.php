<?php
session_start();

ini_set('upload_max_filesize','7M');
// phpinfo();

if (!file_exists('models/connect.csv')){
    require_once 'models/Initialisation.php'; // les routes ne sont pas encore définis
}else{
    
$log = fopen("models/connect.csv","r");
$line = 1;
while (($line = fgetcsv($log)) !== FALSE) {
    // var_dump($line);
    if ($line[0] != "NameDB"){
        define("BASE_URL",$line[7]); 
        define("dbname",$line[0]); 
        define("UserDB",$line[1]); 
        define("passwordDB",$line[2]); 
    }
}
fclose($log);





// inclusion des classes
require_once 'models/Router.php';
require_once 'models/baseDonnees.php';
require_once 'models/cookies.php';

require_once 'controllers/HomeController.php';
require_once 'controllers/GroupeController.php';
require_once 'controllers/OrganisationController.php';
require_once 'controllers/LoginController.php';

//instanciation des classes
$router = new Router();




//Définition des routes 
$router->addRoute("GET",BASE_URL.'/','HomeController','home');
$router->addRoute("POST",BASE_URL.'/','HomeController','home');
$router->addRoute("GET",BASE_URL.'/groupe','GroupeController','index');
$router->addRoute("POST",BASE_URL.'/groupe','GroupeController','index');
$router->addRoute("GET",BASE_URL.'/organisation','OrganisationController','index');
$router->addRoute("POST",BASE_URL.'/organisation','OrganisationController','index');
$router->addRoute("GET",BASE_URL.'/jesuisorganisateur','OrganisationController','staff');
$router->addRoute("POST",BASE_URL.'/jesuisorganisateur','OrganisationController','staff');
$router->addRoute("GET",BASE_URL.'/connexion','LoginController','index');
$router->addRoute("POST",BASE_URL.'/connexion','LoginController','index');
$router->addRoute("GET",BASE_URL.'/connexionSubmited','LoginController','connexion');
$router->addRoute("POST",BASE_URL.'/connexionSubmited','LoginController','connexion');
$router->addRoute("GET",BASE_URL.'/menu','HomeController','loaded');
$router->addRoute("POST",BASE_URL.'/menu','HomeController','loaded');
$router->addRoute("GET",BASE_URL.'/deconexion','LoginController','deconexion');
$router->addRoute("POST",BASE_URL.'/deconexion','LoginController','deconexion');



$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$handler = $router->getHandler($method,$uri);
// handler = [mehtode=>"GET",controller=>"HomeController",action=>"index"]

if ($handler === NULL){
    require_once 'views/lost.php';
    // header('HTTP/1.1 404 not found');

}else{

    //Appel du controller
    $controller = new $handler['controller']();
    $action = $handler["action"];
    $controller->$action();
}
}
?>
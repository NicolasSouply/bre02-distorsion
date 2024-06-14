

<?php

/*

## Appeler le routeur dans l'index

Maintenant qu'on a un Router, on va pouvoir l'appeler depuis notre index.php.

En premier on va créer le fichier `config/autoload.php` qui nous permettra de faire des require de toutes nos classes à un seul endroit.

Dedans on va donc require notre class Router. Puis on va require l'autoload dans notre index.

ATTENTION : dans l'autoload tous les liens de vos fichiers pour les require, considérez que vous êtes au niveau de l'index.

Ensuite ans notre index.php nous allons récupérer, s'il existe, la valeur du paramètre `$_GET['route']` dans une variable $route. 

Si le paramètre n'existe pas, $route vaudra null.

*/

require "config/autoload.php";

if(isset($_GET['route']) && $_GET['route'] !== ""){
    $route = $_GET['route'];
}
else
{
    $route = null;
}

$router = new Router();
$router->handleRequest($route);
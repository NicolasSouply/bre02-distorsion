

<?php

/*


En premier on va créer le fichier `config/autoload.php` qui nous permettra de faire des require de toutes nos classes à un seul endroit.

Dedans on va donc require notre class Router. Puis on va require l'autoload dans notre index.

ATTENTION : dans l'autoload tous les liens de vos fichiers pour les require, considérez que vous êtes au niveau de l'index.

*/


require 'models/Category.php';
require 'managers/AbstractManager.php';
require 'controllers/CategoryController.php';

require 'controllers/DefaultController.php';
require 'Router.php';

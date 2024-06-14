

<?php 

    /*
    
on va lui creer une méthode handleRequest.
elle reçoit la route et se chargera de faire correspondre la route à une méthode de controller
1 URL === 1 ROUTE === UNE MÉTHODE DE CONTROLLER


Créer les routes qu'on a détérminées en amont.Faire une condition if / elseif / else if/ .. / else qui correspond aux routes suivantes :

- home - add-category - add-room - add-message - show-room - 404 - pas de route 

1 URL === 1 ROUTE === UNE MÉTHODE DE CONTROLLER */



class Router {
    
    private $dc;
    
    
    public function __construct()
    {
        $this->dc = new DefaultController();
        $this->cc = new CategoryController();
    }
    

 
    public function handleRequest(? string $route) : void
    {
        
        
        if($route !== null && $route === 'home')
        {
            $this->dc->home();
        }
        else if($route !== null && $route === 'add-category')
        {
            echo "Je veux afficher la route pour ajouter une catégorie<br>";
        }
        else if($route !== null && $route === 'get-category')
        {
            echo "Je veux afficher la route pour RECUPERER UNE CATEGORIE<br>";
        }
        else if($route !== null && $route === 'get-categories')
        {
            $this->cc->getCategories();
        }
        
        else if($route !== null && $route === 'add-room')
        {
            echo "Je veux afficher la route pour ajouter un salon<br>";
        }
        else if($route !== null && $route === 'get-rooms')
        {
            echo "Je veux afficher la route pour RECUPERER un salon<br>";
        }
        else if($route !== null && $route === 'add-message')
        {
            echo "Je veux afficher la route pour RECUPERER DES SALONS<br>";
        }
        else if($route !== null && $route === 'show-room')
        {
            echo "Je veux afficher la route pour AFFICHER le salon<br>";
        }
        
        
        else if($route === null)
        {
            $this->dc->home();
        }
        else
        {
            $this->dc->notFound();
        }
    }
}
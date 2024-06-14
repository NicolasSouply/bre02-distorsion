<?php


class DefaultController {
    
    public function __construct() 
    {
        
    }
    
    public function home() : void 
    {
        $template ='templates/home.phtml';
        require "templates/layout.phtml"; // ca copie colle le layout.phtml et donc a acces à $template
    }
    
    public function notFound() : void 
    {
        $template = 'templates/404.phtml';
        require "templates/layout.phtml";
    }
}
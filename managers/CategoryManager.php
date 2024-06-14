<?php 


class CategoryManager extends AbstractManager 
{
    public function __construct() 
    {

        
    }
    public function findAllCategories() : array
    {
        $categories = [];
        
        $query = $this->db->prepare("SELECT * FROM categories");
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    }
}
<?php


abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        
        $host = "http://localhost/phpmyadmin/index.php?route=/database/structure&server=1&db=prenomnom_soutienpdo&table=users";
$port = "3306";
$dbname = "nicolassouply_php_distorsion";
$connexionString = "mysql:host=$host$;port=$port;dbname=$dbname";

$user = "nicolassouply";
$password = "160705284c0d80d14b3487695ba067cb";

$db = new PDO(
    $connexionString,
    $user,
    $password
    );
        
    }
}
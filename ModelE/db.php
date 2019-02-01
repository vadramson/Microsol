<?php
class MicrosolDB {
    
    public $bdd;


    function __construct(){
    try {

        $this->bdd = new PDO('mysql:host=localhost;dbname=microsol;charset=utf8', 'root', '');
        $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Displays error message in case connection fails
    } catch (Exception $e) {

        die('Erreur : ' . $e->getMessage()); 
    }
}
}
?>
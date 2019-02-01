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



$db = new MicrosolDB();

if(isset($_POST["ammt"]) && !empty($_POST["ammt"]))
        {
            $actnum = mysql_real_escape_string(htmlentities(($_POST["ammt"])));
            
           $query = $db->bdd->query("SELECT * FROM account where Number ='".$actnum ."' AND status = 'Active' ") or die(mysql_error());
           $reqt = $query->fetch();
           
           if ($reqt != NULL) {
                echo 'U may proceed';
    
           }else{
                echo 'Invalid or Inactive Account Number';
           }
        }
        
        
      
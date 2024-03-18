<?php 
include_once('lib/database.php');   // we inlcuden het database object 

class model_skills {                // let hier dus op de naam 

    public function getData() {
        $db = new Database();       // we maken een database object aan
        $result = $db->query("      
            SELECT s.id, s.name, s.level, c.name as 'category' FROM skills s
            LEFT JOIN category c
            ON c.id = s.category_id
        ");                         // we voeren onze query uit op de database
        return $result;             // we geven het resultaat terug aan onze controller.
    }

}
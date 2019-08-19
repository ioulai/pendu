<?php
require 'ConnexionBdd.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ThemeBdd
 *
 * @author I005077
 */
class MotBdd extends ConnexionBdd{
    public function insertMot($nom) {
        $query = 'insert into mot (mot_nom) values (?)';
        
        $this->query($query, array($nom));
    }
    
    public function selectInsertId(){
        $query = 'select MAX(mot_id) from mot';
        $id = $this->query($query);
       $last_id= $id->fetchAll();
        
        return $last_id[0];
    }    
}

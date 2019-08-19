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
class ThemeBdd extends ConnexionBdd{
    public function insertTheme($nom) {
        $query = 'insert into theme (theme_nom) values (?)';
        
        $this->query($query, array($nom));
    }
    public function selectAllTheme(){
        $query = "select theme_id, theme_nom from theme";
        return $this->query($query);
    }
}


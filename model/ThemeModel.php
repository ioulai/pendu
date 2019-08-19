<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ThemeModel
 *
 * @author I005077
 */
class ThemeModel {
    
    private $theme_id;
    private $theme_nom;
    function __construct($theme_id, $theme_nom) {
        $this->theme_id = $theme_id;
        $this->theme_nom = $theme_nom;
    }
    
    
    function getTheme_id() {
        return $this->theme_id;
    }

    function getTheme_nom() {
        return $this->theme_nom;
    }

    function setTheme_id($theme_id) {
        $this->theme_id = $theme_id;
    }

    function setTheme_nom($theme_nom) {
        $this->theme_nom = $theme_nom;
    }



}

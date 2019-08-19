<?php
require '../autoload.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ThemeController
 *
 * @author I005077
 */
class MotController {
      /**
     * utiliser pour les requetes POST
     * @param type $POST
     * @return type
     */
    public function toDoPost($POST)
    {
        $retour = null;
        $json   = null;
        $action = isset($POST['action']) ? $POST['action'] : null;
        switch ($action)
        {
            case "ajoutMot":
           $retour=     $this->insertMot($POST);
                break;

            default:
                break;
        }

        if ($json != null)
        {
            echo json_encode($json);
        }
        return $retour;
    }

    /**
     * utiliser pour les requetes GET
     * @param type GET
     * @return type
     */
    public function toDoGet($GET)
    {
        $retour = null;
        $json   = null;
        $action = isset($POST['action']) ? $POST['action'] : null;
        switch ($action)
        {
            case "":
                break;

            default:
                break;
        }

        if ($json != null)
        {
            echo json_encode($json);
        }
        return $retour;
    }


    function  insertMot($POST){
        //on appel la classe qui stock la requete
        $motBdd = new MotBdd();
        //recupere parametre du formulaire
        $nom = $POST['mot_nom'] ?? NULL;        
        //on insert en base de donnees
        try {
            //on execute la requete
            $motBdd->insertMot($nom);
        } catch (PDOException $ex) {
            throw new Exception('erreur lors de la creation du mot '.$ex->getMessage());
        }
    }




   
}

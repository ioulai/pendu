<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConnexionBdd
 *
 * @author I005077
 */
abstract class ConnexionBdd {
    private static $login = 'root';
    private static $db = 'pendu_db';
    private static $pass ='root';
    private static $connec;

        private static function openConnexion(){
         try
		{
			$bdd = new PDO('mysql:host=localhost;dbname='. self::$db, self::$login, self::$pass);
			$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
			$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			self::$connec = $bdd;
		}
		catch (PDOException $e)
		{
			$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
			die($msg);
		}
                return self::$connec;
}

protected function query($query, $param =null){
    if ($param == null){
        $res = self::openConnexion()->prepare($query);
        $res->execute();
        
    }else{
        $res = self::openConnexion()->prepare($query);
//        $res->bindParam();
         $res->execute($param);
    }
   
    return $res;
}
}

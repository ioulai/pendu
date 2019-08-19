<?php

/**
 * autoload : util que si on fait un new d'une classe
 * @param type $class_name
 */
spl_autoload_register(function($class_name)
{
    $projectDir= [
        "bdd" => $_SERVER['DOCUMENT_ROOT']."/Pendu/bdd/".$class_name.".php",
        "controller" => $_SERVER['DOCUMENT_ROOT']."/Pendu/controller/".$class_name.".php",
        "model" => $_SERVER['DOCUMENT_ROOT']."/Pendu/model/".$class_name.".php"
        
    ];
    
        

    foreach ($projectDir as $dir)
    {
        if (file_exists($dir))
        {
            include_once $dir;
        }
    }
});

// Routage des controlleurs pour qu'ils soient appellés chacun leur tours suivant la requète
if (isset($_SERVER['REQUEST_METHOD']) && !empty($_SERVER['REQUEST_METHOD']))
{
    $controller = null;
    if (!empty($_SERVER['SCRIPT_NAME']))
    {
        $server_script = explode("/", $_SERVER['SCRIPT_NAME']);
        $script        = $server_script[count($server_script) - 1];
        //echo $script;
        if (strpos($script, "Controller"))
        {
//            $script = '\Controller\\' . substr($script, 0, strlen($script) - 10); // On enlève .class.php au controller
            $script     = substr($script, 0, strlen($script) - 4); // On enlève .php au controller
            $controller = new $script();
            switch ($_SERVER['REQUEST_METHOD'])
            {
                case "GET":
                    $controller->toDoGet($_GET);
                    break;
                case "POST" :
                    $controller->toDoPost($_POST);
                    break;
                default:
                    break;
            }
        }
    }
}



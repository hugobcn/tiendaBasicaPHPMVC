<?php
//http://localhost/masterphp/aprendiendoPHP/proyectoPHPPOOMVC/?controller=usuario&action=index
session_start();
require_once 'helpers/utils.php';
require_once 'autoload.php';

require_once 'config/parameters.php';
require_once 'views/layout/header.php';
require_once 'views/layout/sidebar.php';
require_once 'controllers/ErrorController.php';
require_once 'config/db.php';


//Conexion DDBB
//$db = DataBase::connect();

function show_error(){
    $error = new errorContoller();
    $error -> index();
}

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
    //var_dump($nombre_controlador);
}elseif(!isset ($_GET['controller']) && !isset ($_GET['action'])){
        $nombre_controlador = controller_default;
    }  else {
    //echo "404 not found controller";
    //var_dump($_GET['controller']);
    show_error();
    exit();
}

//echo "indexNOmbreControlador: ".var_dump($nombre_controlador)."<br>";
//echo "indexClassExists: ".var_dump(class_exists($nombre_controlador))."<br>";


if (class_exists($nombre_controlador)) {
    $controlador = new $nombre_controlador();
    //var_dump($controlador);
    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    }elseif(!isset ($_GET['controller']) && !isset ($_GET['action'])){
        
        $actionDefault = action_default;
         //var_dump($actionDefault);
        $controlador->$actionDefault();     
    }else {
        
        //echo "404 not found method";
        
        //$error = new errorContoller();
        //$error->index();
        
        show_error();
        
        
        //http://localhost/masterphp/aprendiendoPHP/proyectoPHPPOOMVC/error/index
    }
} else {
    echo "404 not found class";
    
    //$error = new errorContoller();
    //$error->index();
    show_error();
   
    
}

require_once 'views/layout/footer.php';

?>


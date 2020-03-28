<?php

function controller_autoload($class){
    //include 'controllers/' . $class . '.php';
     include 'controllers/' . ucfirst ($class). '.php';
     //var_dump(ucfirst ($class));
     //die();
      //echo "suto load: ".  var_dump('controllers/' . ucfirst ($class ) . '.php')."<br>";
}
//echo "controller_autoload: ".var_dump($expression)."<br>";
spl_autoload_register('controller_autoload');
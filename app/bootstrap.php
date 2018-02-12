<?php
    // Load config.php file
    require_once "config/config.php";

    // An autoloader to load core libraries
    spl_autoload_register(function($className){
      require_once "libraries/$className.php";
    });
?>

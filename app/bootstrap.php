<?php
require_once 'config/config.php';
//AUTOLOAD
spl_autoload_register(function ($clase){
    require_once 'librerias/'.$clase.'.php';
});

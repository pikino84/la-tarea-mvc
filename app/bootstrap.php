<?php
session_start();
require_once 'config/config.php';
require_once 'librerias/redireccionamiento.php';
//AUTOLOAD
spl_autoload_register(function ($clase){
    require_once 'librerias/'.$clase.'.php';
});

<?php
class Usuarios extends Controlador{
    public function __construc(){
        
    }

    public function index(){
        $this->vista('usuarios/login');
    }
}
<?php
class Publicaciones extends Controlador{
    public function __construct(){
        if(!isset($_SESSION['id_usuario'])){
            redirect('usuarios/login');
        }
    }

    public function index(){
        $this->vista('publicaciones/index');
    }
}
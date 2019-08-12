<?php
class Alertas extends Controlador{
    public function index($alerta){
        $this->vista('alertas/'.$alerta);
    }
}
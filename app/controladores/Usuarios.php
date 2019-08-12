<?php
class Usuarios extends Controlador{
    public function __construct(){
        $this->modeloUsuarios = $this->modelo('modeloUsuarios');
    }

    public function index(){
        if($this->checarLogeo()){
            redirect('publicaciones');
        }else{
            $this->vista('usuarios/login');
        }
    }

    public function registro(){
        $this->vista("usuarios/registro");
    }

    public function registrarse(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'nombre' => trim($_POST['nombre']),
            'correo' => trim($_POST['correo']),
            'pass' => trim($_POST['pass'])
        ];
        $data['pass'] = password_hash($data['pass'], PASSWORD_DEFAULT);

        if($this->modeloUsuarios->altaDeUsuario($data)){
            $this->vista('usuarios/login');
        }else{
            die('No se pudo registrar');
        }
    }

    public function iniciarSesion(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'correo' => trim($_POST['correo']),
            'pass' => trim($_POST['pass'])
        ];
        $usuario_logeado = $this->modeloUsuarios->login($data['correo'], $data['pass']);
        if($usuario_logeado){
            $this->crearSesionDeUsuario($usuario_logeado);
        }else{
            $this-vista('usuarios/login');
        }
    }

    public function crearSesionDeUsuario($user){
        $_SESSION['id_usuario'] = $user->id;
        redirect('alertas/entro');
    }

    public function salir(){
            unset($_SESSION['id_usuario']);
            session_destroy();
            redirect('usuarios/login');
    }

    public function checarLogeo(){
        if(isset($_SESSION['id_usuario'])){
            return true;
        }else{
            return false;
        }
    }
}
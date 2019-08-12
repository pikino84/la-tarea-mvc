<?php
class Publicaciones extends Controlador{
    public function __construct(){
        if(!isset($_SESSION['id_usuario'])){
            redirect('usuarios/login');
        }

        $this->modeloPublicacion= $this->modelo('modeloPublicaciones');
    }

    public function index(){
        $posts = $this->modeloPublicacion->selPublicaciones();
        $data = [
            'post' => $posts
        ];
        $this->vista('publicaciones/index', $data);
    }

    public function vistaNuevaPublicacion(){
        $this->vista('publicaciones/nueva_publicacion');
    }

    public function nuevaPublicacion(){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $archivo = $_FILES['imagen']['tmp_name'];
        $nombre_archivo = $_FILES['imagen']['name'];
        $info = pathinfo($nombre_archivo);
        $extencion = $info['extension'];
        $nombre_imagen = $_SESSION['id_usuario'].'-'.rand(0000,9999);
        move_uploaded_file($archivo, RUTAIMG.'/public/imagenes/'.$nombre_imagen.'.'.$extencion);
        $ruta = $nombre_imagen.'.'.$extencion;

        $data = [
            'titulo' => trim($_POST['titulo']),
            'mensaje' => trim($_POST['mensaje']),
            'imagen' => trim($ruta),
            'id_usuario' => $_SESSION['id_usuario']
        ];
        if($this->modeloPublicacion->agregarPublicacion($data)){
            redirect('alertas/agregar_publicacion');
        }else{
            dies('No guardo la publicación');
        }
    }

    public function vistaEditarPublicacion($id){
        $post = $this->modeloPublicacion->publicacionesPorId($id);
        if($post->id_usuario != $_SESSION['id_usuario']){
            redirect('publicaciones');
        }
        $data = [
            'id'=>$id,
            'titulo'=>$post->titulo,
            'mensaje'=>$post->mensaje,
            'imagen'=>$post->imagen
        ];
        $this->vista('publicaciones/editar_publicacion', $data);

    }

    public function editarPublicacion($id){
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $archivo = $_FILES['imagen']['tmp_name'];
        if($archivo == ""){
            $ruta = $_POST['ruta'];
        }else{
            $imagen_eliminar = $_POST['ruta'];
			$borrar_img = RUTAIMG . '/public/imagenes/'. $imagen_eliminar;
            unlink($borrar_img);
            $nombrearchivo = $_FILES['imagen']['name'];
            $info = pathinfo($nombrearchivo);
            $extension = $info['extension'];
            $nombre_imagen = $_SESSION['id_usuario'].'-'.rand(00000,99999);
            move_uploaded_file($archivo, RUTAIMG.'/public/imagenes/'.$nombre_imagen.'.'.$extension);
			$ruta = $nombre_imagen.'.'.$extension;
        }
        $data = [
			'id' => $id,
			'titulo' => trim($_POST['titulo']),
			'mensaje' => trim($_POST['mensaje']),
			'imagen' => $ruta,
			'id_usuario' => $_SESSION['id_usuario']
        ];
        
        if ($this->modeloPublicacion->actualizarPublicacion($data)) {
            redirect('alertas/editar_publicacion');
		}else{
			die('Ocurrio un error');
		}
    }

    public function eliminarPublicacion($id, $imagen){
        if ($this->modeloPublicacion->borrarPublicacion($id)) {
            $borrar_img = RUTAIMG.'/public/imagenes/'.$imagen;
            unlink($borrar_img);
			redirect('alertas/elimino_publicacion');
		}else{
			die('No se puedo eliminar la publicación');
		}
    }

}
<?php require RUTAAPP.'/vistas/includes/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content black-text">
                        <span class="card-title black-text">Editar publicación</span>
                        <form action="<?= RUTAPUBLIC; ?>/publicaciones/editarPublicacion/<?= $data['id']; ?>" method="POST" enctype="multipart/form-data">
                            <input type="text" name="titulo" placehoder="Titulo" value="<?= $data['titulo']; ?>">
                            <textarea name="mensaje" class="materialize-textarea" placeholder="En que estas pensando" cols="0" rows="10"><?= $data['mensaje']; ?></textarea>
                            <img src="<?= RUTAPUBLIC; ?>/public/imagenes/<?= $data['imagen']; ?>" widht="70">
                            <input type="hidden" name="ruta" value="<?= $data['imagen']; ?>">
                            <div class="file-field input-field">
                                <div class="btn black">
                                    <span>Imagen</span>
                                    <input type="file" name="imagen">
                                </div>
                                <div class="file-path-wrapper">
                                    <input type="text" class="file-path validate">
                                </div>
                            </div>
                            <button class="btn waves-effect waves-light black" type="submit" name="action"><i class="material-icons">add</i>Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php require RUTAAPP.'/vistas/includes/footer.php'; ?>
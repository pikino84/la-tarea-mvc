<?php require RUTAAPP.'/vistas/includes/header.php'; ?>
        <div class="card">
            <div class="card-content black-text">
                <span class="card-title black-text"><h2>Publicaciones</h2></span>
                <a href="<?= RUTAPUBLIC; ?>/publicaciones/vistaNuevaPublicacion" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
        </div>

        <div class="container center-div">
            <?php foreach($data['post'] as $post): ?>
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="<?= RUTAPUBLIC; ?>/public/imagenes/<?= $post->imagen; ?>" width="200">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4"><?= $post->titulo; ?><i class="material-icons right">more_vert</i></span>
                            <p>Creado por: <?= $post->nombre; ?></p>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4"><?= $post->titulo; ?><i class="material-icons right">close</i></span>
                            <p><?= $post->mensaje; ?></p>
                        </div>
                        <?php if($post->id_usuario == $_SESSION['id_usuario']):?>
                        <div class="card-action">
                            <a href="<?= RUTAPUBLIC; ?>/publicaciones/vistaEditarPublicacion/<?= $post->id_publicacion; ?>">Editar</a>
                            <a href="<?= RUTAPUBLIC; ?>/publicaciones/eliminarPublicacion/<?= $post->id_publicacion; ?>/<?= $post->imagen; ?>">Eliminar</a>
                        </div>
                        <?php endif?>
                    </div>  
                </div>
            </div>          
            <?php endforeach ?>
        </div>
<?php require RUTAAPP.'/vistas/includes/footer.php'; ?>
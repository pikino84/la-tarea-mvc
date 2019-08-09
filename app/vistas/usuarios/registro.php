<?php require RUTAAPP.'/vistas/includes/header.php'; ?>
<div class="container" align="center" style="margin-top:150px">
    <div class="row center-div">
        <div class="col s12">
            <div class="card">
                <div class="row"><br>
                    <h1>Registrarse</h1>
                </div>
                <div class="card-content black-text">
                    <form action="<?= RUTAPUBLIC; ?>/usuarios/registrarse/" method="POST" autocomplete="off">
                        <input type="text" placeholder="nombre" autofocus name="nombre" required="">
                        <input type="email" placeholder="correo" name="correo" required="">
                        <input type="password" placeholder="clave"  name="pass" required="">
                        <button class="btn wave-effect waves-light black" type="submit" name="action">Registrarse <i class="material-icons">send</i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require RUTAAPP.'/vistas/includes/footer.php'; ?>
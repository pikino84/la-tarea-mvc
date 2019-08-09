<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF8-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?= RUTAPUBLIC; ?>/public/css/materialize.min.css">
        <link rel="stylesheet" href="<?= RUTAPUBLIC; ?>/public/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <title><?= NOMBREAPP; ?></title>
    </head>
    <body>
        <?php require RUTAAPP.'/vistas/includes/navbar.php'; ?>
        <main>
            <div class="container" align="center" style="margin-top:150px">
                <div class="row center-div">
                    <div class="col s12">
                        <div class="card">
                            <div class="row"><br>
                                <img src="<?= RUTAPUBLIC; ?>/public/img/logo.png"  width="200" alt="logo" >
                            </div>
                            <div class="card-content black-text">
                                <form action="<?= RUTAPUBLIC; ?>/usuarios/iniciarSesion/" method="POST" autocomplete="off">
                                    <input tyoe="email" placeholder="correo" autofocus name="correo" required="">
                                    <input tyoe="password" placeholder="clave"  name="pass" required="">
                                    <button class="btn wave-effect waves-light black" type="submit" name="action">Entrar <i class="material-icons">send</i></button>
                                </form>
                                <br><br><br>
                                2019 COPYRIGHT INTAPHOTO
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
<nav class="red">
    <div class="nav-wrapper">
        <a href="#" class="brand-logo"><?= NOMBREAPP; ?></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <?php if(isset($_SESSION['id_usuario'])): ?>
                <li><a href="<?= RUTAPUBLIC; ?>/usuarios/index">INICIO</a></li>
                <li><a href="<?= RUTAPUBLIC; ?>/usuarios/salir">SALIR</a></li>
            <?php else: ?>
                <li><a href="<?= RUTAPUBLIC; ?>/usuarios/login">ENTRAR</a></li>
                <li><a href="<?= RUTAPUBLIC; ?>/usuarios/registro">REGISTRARSE</a></li>
            <?php endif ?>
        </ul>
    </div>
</nav>
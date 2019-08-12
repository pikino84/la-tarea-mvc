<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF8-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="<?= RUTAPUBLIC; ?>/public/css/materialize.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <title><?= NOMBREAPP; ?></title>
        <style>
            body{
                background:whitesmoke;
            }
            .center-div{
                margin: 0 auto;
                width:50%;
            }
        </style>
    </head>
    <body>
        <?php
        require RUTAAPP.'/vistas/includes/navbar.php';
        ?>
    <main>
<?php require RUTAAPP.'/vistas/includes/header.php'; ?>
<script>
swal("Se elimino  la publicación")
.then((value) => {
    location.href = "<?= RUTAPUBLIC; ?>/publicaciones/index";
});
</script>
<?php require RUTAAPP.'/vistas/includes/footer.php'; ?>
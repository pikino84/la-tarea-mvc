<?php require RUTAAPP.'/vistas/includes/header.php'; ?>
<script>
swal("Bienvenido!")
.then((value) => {
    location.href = "<?= RUTAPUBLIC; ?>/publicaciones/index";
});
</script>
<?php require RUTAAPP.'/vistas/includes/footer.php'; ?>
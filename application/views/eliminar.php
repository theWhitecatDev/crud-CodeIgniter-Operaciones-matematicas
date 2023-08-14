<!DOCTYPE html>
<html>

<head>
    <title>Confirmación de Eliminación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Confirmación de Eliminación</h2>
        <p>¿Está seguro de eliminar <?= $numero1 ?> <?= $operacion ?> <?= $numero2 ?>?</p>
        <a class="btn btn-danger" href="<?= $accion ?>">Confirmar</a>
        <a class="btn btn-secondary" href="http://localhost/crudcodelgniter/index.php/main/">Atrás</a>
    </div>
</body>

</html>
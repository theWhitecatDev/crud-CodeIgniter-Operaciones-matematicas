<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Operaciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Formulario de Operaciones</h2>
        <form action="<?=$accion?>" method="post">
            <div class="form-group">
                <label for="numero1">Número 1:</label>
                <input class="form-control" type="text" id="numero1" name="numero1" value="<?=$numero1?>">
            </div>
            <div class="form-group">
                <label for="operacion">Operación:</label>
                <input class="form-control" type="text" id="operacion" name="operacion" value="<?=$operacion?>">
            </div>
            <div class="form-group">
                <label for="numero2">Número 2:</label>
                <input class="form-control" type="text" id="numero2" name="numero2" value="<?=$numero2?>">
            </div>
            <input class="btn btn-primary" type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

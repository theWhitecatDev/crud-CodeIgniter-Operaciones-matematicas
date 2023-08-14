<!DOCTYPE html>
<html>

<head>
    <title>Operaciones Matemáticas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 20px;
        }

        .create-link {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Operaciones Matemáticas</h2>
        <a class="btn btn-primary create-link" href="http://localhost/crudcodelgniter/index.php/main/crear/">Crear nueva operación</a>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Operación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($r as $item) {
                    echo '<tr>';
                    echo '<td>' . $item->numero1 . ' ' . $item->operacion . ' ' . $item->numero2 . ' = ' . $item->resultado . '</td>';
                    echo '<td>';
                    echo '<a class="btn btn-success" href="http://localhost/crudcodelgniter/index.php/main/editar/' . $item->id . '">Editar</a>';
                    echo '<a class="btn btn-danger" href="http://localhost/crudcodelgniter/index.php/main/eliminar/' . $item->id . '">Eliminar</a>';
                    echo '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
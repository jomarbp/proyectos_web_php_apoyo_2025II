<!DOCTYPE html>
<html lang="en">
<?php include 'config.php' ?>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="jumbotron text-center">
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3>Lista Clientes</h3>
                <p>Relación obtenida desde la base de datos</p>

                <?php 
                    if(isset($_GET['mensaje']) and $_GET['mensaje']=='actualizado'){
                ?>
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Hecho!</strong> El usuarios fue actualizado.
                </div>
                <?php
                    }
                ?>

                <?php
                $stmt = $conexion->prepare("select * from cliente");
                $stmt->execute();
                $resultado = $stmt->fetchAll();
                ?>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Accciones</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($resultado as $fila) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $fila['dni']; ?></td>
                                <td><?php echo $fila['nombre']; ?></td>
                                <td><?php echo $fila['apellido']; ?></td>
                                <td>
                                    <a href="formulario_actualizar_cliente.php?dni=<?php echo $fila['dni']; ?>"
                                        class="btn btn-success">Editar</a>
                                    <a href="eliminar_cliente.php?dni=<?php echo $fila['dni']; ?>"
                                        class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        </tbody>

                        <?php
                    }
                    ?>
                </table>
            </div>

        </div>
    </div>

</body>

</html>
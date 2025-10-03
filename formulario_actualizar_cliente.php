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
        <h1>Formulario de Actualización</h1>
    </div>
    <?php
    $stmt = $conexion->prepare("SELECT * FROM cliente where dni=?");
    $stmt->bindParam(1, $_GET['dni']);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="actualizar_cliente.php" method="POST">
                    <div class="form-group">
                        <label for="dni">DNI:</label>
                        <input type="text" class="form-control" placeholder="Ingrese dni" id="dni" name="dni" value="<?php echo $resultado[0]['dni']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" placeholder="Ingrese Apellidos" id="apellidos"
                            name="apellidos" value="<?php echo $resultado[0]['apellido'];  ?>">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Nombres:</label>
                        <input type="text" class="form-control" placeholder="Ingrese Nombres" id="nombres"
                            name="nombres" value="<?php echo $resultado[0]['nombre'];  ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Actualizar</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>
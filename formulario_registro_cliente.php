<!DOCTYPE html>
<html lang="en">
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
        <h1>Formulario de Registro</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <form action="registrar_cliente.php" method="POST">
                    <div class="form-group">
                        <label for="dni">DNI:</label>
                        <input type="text" class="form-control" placeholder="Ingrese dni" id="dni" name="dni">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" placeholder="Ingrese Apellidos" id="apellidos"
                            name="apellidos">
                    </div>
                    <div class="form-group">
                        <label for="apellidos">Nombres:</label>
                        <input type="text" class="form-control" placeholder="Ingrese Nombres" id="nombres"
                            name="nombres">
                    </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
            </div>

        </div>
    </div>

</body>

</html>
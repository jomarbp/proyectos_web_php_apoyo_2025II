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
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3>Formulario</h3>
                <form action="procesar_datos.php" method="get">
                    <div class="form-group">
                        <label for="DNI">Ingrese su DNI:</label>
                        <input type="text" class="form-control" placeholder="Ingrese su DNI" id="DNI" name="text_dni">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Apellidos:</label>
                        <input type="text" class="form-control" placeholder="Ingrese sus apellidos" id="apellidos" name = "text_apeliidos">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Nombres:</label>
                        <input type="text" class="form-control" placeholder="Ingrese su Nombre" id="nombres" name = "text_nombres">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Edad:</label>
                        <input type="number" class="form-control" placeholder="Ingrese su Edad" id="edad" name = "text_edad">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Direccion:</label>
                        <input type="text" class="form-control" placeholder="Ingrese su direccion" id="direccion" name = "text_direccion">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Celular:</label>
                        <input type="text" class="form-control" placeholder="Ingrese su celular" id="nombres" name = "text_celular">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
            <div class="col-sm-8">
                <h3>Column 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
            </div>

        </div>
    </div>

</body>

</html>
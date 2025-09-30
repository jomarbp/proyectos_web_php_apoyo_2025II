<!DOCTYPE html>
<html lang="es">
<head>
    <title>Registro de Postulantes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="jumbotron text-center">
        <h1>Concurso de Innovación Tecnológica</h1>
        <p>Formulario de Registro de Postulantes</p>
    </div>

    <div class="container">
        <form action="procesar_postulante.php" method="post">
            
            <!-- DATOS PERSONALES -->
            <h3>Datos Personales</h3>
            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="number" class="form-control" id="dni" name="dni" placeholder="Ingrese su DNI" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos" required>
            </div>
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese sus nombres" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" placeholder="Ingrese su edad">
            </div>
            <div class="form-group">
                <label for="correo">Correo electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese su correo">
            </div>
            <div class="form-group">
                <label for="clave">Contraseña:</label>
                <input type="password" class="form-control" id="clave" name="clave" placeholder="Cree una contraseña">
            </div>

            <!-- PREFERENCIAS -->
            <h3>Preferencias del Concurso</h3>
            <div class="form-group">
                <label>Área de postulación:</label><br>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="software" name="area" value="Innovación en Software">
                    <label class="form-check-label" for="software">Innovación en Software</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="robotica" name="area" value="Robótica">
                    <label class="form-check-label" for="robotica">Robótica</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" id="energias" name="area" value="Energías Renovables">
                    <label class="form-check-label" for="energias">Energías Renovables</label>
                </div>
            </div>

            <div class="form-group">
                <label>Disponibilidad:</label><br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="talleres" name="disponibilidad[]" value="Talleres previos">
                    <label class="form-check-label" for="talleres">Participar en talleres previos</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="feria" name="disponibilidad[]" value="Feria de proyectos">
                    <label class="form-check-label" for="feria">Presentar proyecto en feria</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="charlas" name="disponibilidad[]" value="Charlas magistrales">
                    <label class="form-check-label" for="charlas">Asistir a charlas magistrales</label>
                </div>
            </div>

            <!-- OTROS DATOS -->
            <h3>Otros Datos</h3>
            <div class="form-group">
                <label for="telefono">Teléfono de contacto:</label>
                <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su número de teléfono">
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <textarea class="form-control" id="direccion" name="direccion" rows="3" placeholder="Ingrese su dirección"></textarea>
            </div>

            <!-- BOTONES -->
            <button type="submit" class="btn btn-primary">Registrar</button>
            <button type="reset" class="btn btn-danger">Limpiar</button>
        </form>
    </div>

</body>
</html>

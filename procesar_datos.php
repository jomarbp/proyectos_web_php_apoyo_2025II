<?php
    $dni = $_POST['dni'];
    $apellidos = $_POST['apellidos'];
    $nombres = $_POST['nombres'];
    $edad = $_POST['edad'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $direccion = $_POST['direccion'];
    $area = $_POST['area'];
    $disponibilidad = $_POST['disponibilidad'];
    $telefono = $_POST['telefono'];

    echo "DNI: $dni <br>";
    echo "Apellidos: $apellidos <br>";
    echo "Nombres: $nombres <br>";
    echo "Edad: $edad <br>";
    echo "Correo: $correo <br>";
    echo "Contraseña: $clave <br>";
    echo "Dirección: $direccion <br>";
    echo "Área de postulación: $area <br>";
    echo "Disponibilidad: $disponibilidad <br>";
    echo "Teléfono de contacto: $telefono <br>";
?>
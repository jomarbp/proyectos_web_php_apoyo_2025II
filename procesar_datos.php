<?php
    $dni = $_GET['dni'];
    $apellidos = $_GET['apellidos'];
    $nombres = $_GET['nombres'];
    $edad = $_GET['edad'];
    $correo = $_GET['correo'];
    $clave = $_GET['clave'];
    $direccion = $_GET['direccion'];
    $area = $_GET['area'];
    $disponibilidad = $_GET['disponibilidad'];
    $telefono = $_GET['telefono'];

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

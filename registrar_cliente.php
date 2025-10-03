<?php
    include "config.php";
    $dni = $_POST['dni'];
    $apellidos = $_POST['apellidos'];
    $nombres = $_POST['nombres'];
    $stmt = $conexion->prepare("INSERT INTO cliente (dni, apellido, nombre) VALUES (?, ?, ?)");
    $stmt->bindParam(1, $dni);
    $stmt->bindParam(2, $apellidos);
    $stmt->bindParam(3, $nombres);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "Registro realizado correctamente.";
        header("Location: index.php?mensaje=insertado");
    } else {
        echo "No se pudo realizar el registro.";
    } 
?>
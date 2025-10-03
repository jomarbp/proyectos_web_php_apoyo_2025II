<?php
    include "config.php";
    $dni = $_POST['dni'];
    $apellidos = $_POST['apellidos'];
    $nombres = $_POST['nombres'];
    $stmt = $conexion->prepare("UPDATE cliente SET apellido=?, nombre=? WHERE dni=?");
    $stmt->bindParam(1, $apellidos);
    $stmt->bindParam(2, $nombres);
    $stmt->bindParam(3, $dni);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "Registro actualizado correctamente.";
        header("Location: listaclientes.php?mensaje=actualizado");
    } else {
        echo "No se pudo actualizar el registro.";
    } 
?>
<?php
    include "config.php";
    $dni = $_GET['dni'];
    $stmt = $conexion->prepare("DELETE FROM cliente WHERE dni=?");
    $stmt->bindParam(1, $dni);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        echo "Registro eliminado correctamente.";
        header("Location: index.php?mensaje=eliminado");
    } else {
        echo "No se pudo eliminar el registro.";
    } 
?>
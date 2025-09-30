<?php
    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    try{
        $conexion = new PDO("mysql:host=$servidor;dbname=bd_clientes", $usuario, $clave);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexión exitosa";
        
       
    }catch(PDOException $e)
    {
         echo "Error en la conexión: " . $e->getMessage();
    }
?>
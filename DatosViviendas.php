<?php 

include("conexion.php");
 

error_reporting(0);
        $nombre = $_POST['nombres'];
        $apellido = $_POST['apellidos'];
        $identificacion = $_POST['identificacion'];
        $telefono = $_POST['telefono'];
        $direccion = $_POST['direccion'];
        $fecha = $_POST['fecha'];
        $codigo = $_POST['codigo'];
        $construccion = $_POST['construccion'];


    $sql = "INSERT INTO `vivienda` (`nombres`, `apellidos`, `identificacion`, `telefono`,
     `dirreccionv`, `fechaconstruccion`, `cpostal`, `calidad`) 
    VALUES ('$nombre', '$apellido', '$identificacion', '$telefono', '$dirreccion', 
    '$fecha', '$codigo', '$construccion')";
    if (mysqli_query($conexion, $sql)) {
        echo "seguro registrado";
    } 
    else {
        echo "No se pudo registrar ";
    }

?>
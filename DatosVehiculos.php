<?php 

include("conexion.php");

error_reporting(0);
        $vehiculo = $_POST['vehiculo'];
        $placa = $_POST['placa'];
        $modelo = $_POST['modelo'];
        $poliza = $_POST['poliza'];
        $cilindraje = $_POST['cilindraje'];
        $año = $_POST['año'];
        $uso = $_POST['uso'];
        $nombre = $_POST['nombres'];
        $apellido = $_POST['apellidos'];
        $identificacion = $_POST['identificacion'];


    $sql = "INSERT INTO `vehiculo` (`claseveh`, `placa`, `modelo`, `poliza`,
     `cilindraje`, `año`, `uso`, `nombresp`, `apellidosp`, `identificacionp`) 
    VALUES ('$vehiculo', '$placa', '$modelo', '$poliza', '$cilindraje', 
    '$año', '$uso', '$nombre', '$apellido', '$identificacion')";
    if (mysqli_query($conexion, $sql)) {
        echo "seguro registrado";
    } 
    else {
        echo "No se pudo registrar ";
    }

?>

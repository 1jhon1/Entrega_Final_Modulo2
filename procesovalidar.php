<?php
include("conexion.php");
if (isset($_POST['Inicio'])){
    if (strlen($_POST['usuario'])>=1 && strlen($_POST['pass'])>=1){
            $NombreUsuario=$_POST['usuario'];
            $Contra=$_POST['pass'];
            date_default_timezone_set('America/Bogota');    
            $time = date('m/d/Y h:i:s a', time());  
            $IP = $_SERVER["REMOTE_ADDR"];


            
            
            $Consulta=mysqli_query($conexion, "SELECT * FROM usuario WHERE 
            usuario='$NombreUsuario' AND contraseña='$Contra'");

$detalles=mysqli_fetch_array($Consulta);

if ($detalles){
    
    session_start();
    $_SESSION['usuario']=$detalles['usuario'];
    $_SESSION['cargo']=$detalles['rol'];
    
    if($_SESSION['cargo']=='administrador'){
        $sql = "INSERT INTO `auditoria` (`Usuario`, `fecha_Login`, `Ip_Cliente`) 
        VALUES ('$NombreUsuario','$time','$IP')";
          if (mysqli_query($conexion, $sql)) {
       
        
           } 
           
        header("Location: InicioMosaico.php");
        
        
    }
    
    if ($_SESSION['cargo']=='estudiante'){
        $sql = "INSERT INTO `auditoria` (`Usuario`, `fecha_Login`, `Ip_Cliente`) 
        VALUES ('$NombreUsuario','$time','$IP')";
          if (mysqli_query($conexion, $sql)) {
       
        
           } 
        header("Location: InicioMosaico.php");
        
    }
    if ($_SESSION['cargo']=='supervisor'){
        $sql = "INSERT INTO `auditoria` (`Usuario`, `fecha_Login`, `Ip_Cliente`) 
        VALUES ('$NombreUsuario','$time','$IP')";
          if (mysqli_query($conexion, $sql)) {
       
        
           } 
        header("Location: InicioMosaico.php");
        
    }

    
}
             else{ 
				echo "El Usuario no existe";
             }
    }
    else {
        header("Location: index.php");
    }
}
?>
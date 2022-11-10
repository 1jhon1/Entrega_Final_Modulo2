<?php
session_start();
session_destroy();
include("procesovalidar.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/sstilos.css">
    <title>Login</title>
</head>
<body>
    <div class="general">
  
    <div class="row padre">
    <form action="procesovalidar.php" method="POST">
           
    <div class=" hijo">
        <h5 class="mb-3">Iniciar Sesión</h5>
            <i class="bi bi-person-circle mb-3"></i>

            <div class="mb-3">
                <label for="Usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="Usuario" name="usuario" required >
            </div>
            <div class="mb-3" id="impus">
                <label for="Contraseya" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="Contraseya" name="pass" required>
            </div>
            <div class="container mb-3">

                <button type="submit" class="btn btn-success mt-3" name="Inicio">Acceder</button>
               
            </div>
        </div> 
    
</form>
</div>
      
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
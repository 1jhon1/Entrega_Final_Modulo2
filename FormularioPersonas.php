<?php

session_start();

if ($_SESSION['cargo']=='administrador'){
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">INICIO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Seguros Personas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Seguros Vehiculos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Seguros Viviendas</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container-fluid">
        <h1 style="text-align: center;"> Formulario de ventas de seguro para personas </h1> 
    </div>
    <br>
    <br>

    <div class="container-fluid">
        <form class="row g-3" action="DatosCotizacion.php" method="post" name="frm">
        <div class="col-md-6">
            <label for="inputAddress" class="form-label"> Nombres </label>
            <input type="text" class="form-control"  name="nombres" required>
        </div>

        <div class="col-6">
            <label for="inputAddress" class="form-label"> Apellidos </label>
            <input type="text" class="form-control" name="apellidos" required>
        </div>

        <div class="col-md-6">
            <label for="id" class="form-label"> Identificacion </label>
            <input type="number" class="form-control"  name="identificacion" required>
        </div>

        <div class="col-6">
            <label for="tel" class="form-label"> Telefono </label>
            <input type="number" class="form-control" name="telefono"  required>

        </div>

        <div class="col-6">
            <label for="inputAddress" class="form-label"> Salario </label>
            <input type="number" class="form-control" name="salario" required>
        </div>

        <div class="col-6">
            <label for="date" class="form-label"> Fecha de Nacimiento </label>
            <input type="date" min="1973-01-01" max="2004-12-31" class="form-control" name="fecha" required>
        </div>


        <div class="col-md-4">
            <label for="inputState" class="form-label">Forma de Pago</label>
            <select name="pago" class="form-select" required>
            <option selected required> Seleccionar forma de pago</option>
            <option>Mensual</option>
            <option>Anual</option>
            <option>Trimestral</option>
            </select>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cotizar</button>
        </div>

        </form>

        <div style= "text-align: center;">
        <a href="MostrarDatos.php"  class="btn btn-success">Ver seguros registrados</a>
        </div>
    
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>
</html>

<?php

}
else {
    header("Location: index.php");
}
?>

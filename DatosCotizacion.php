<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> INICIO </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <?php

    if(isset($_POST['nombres'])){
        $nombre = $_POST['nombres'];
        $apellido = $_POST['apellidos'];
        $identificacion = $_POST['identificacion'];
        $telefono = $_POST['telefono'];
        $fecha = $_POST['fecha'];
        $salario = $_POST['salario'];
        $pago = $_POST['pago'];




    }
    
    ?>

<h1>Datos de cotización</h1>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-label="Example with label" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">95%</div>
</div>

<?php
    if($_POST['pago'] === "Mensual"){
        echo '<h1>Valor a pagar <span class="badge bg-success">$40.000</span></h1>';
    }else if($_POST['pago'] === "Trimestral"){
        echo '<h1>Valor a pagar <span class="badge bg-success">$70.000</span></h1>';


    }else if($_POST['pago'] === "Anual"){

        echo '<h1>Valor a pagar <span class="badge bg-success">$120.000</span></h1>';

    }

?>


<form class="row g-3" action="DatosPersonas.php" method="post" name="frm">
        <div class="col-md-6">
            <label for="inputAddress" class="form-label"> Nombres </label>
            <input type="text" class="form-control"  name="nombres" required value="<?php echo $nombre?>">
        </div>

        <div class="col-6">
            <label for="inputAddress" class="form-label"> Apellidos </label>
            <input type="text" class="form-control" name="apellidos" required value="<?php echo $apellido?>">
        </div>

        <div class="col-md-6">
            <label for="id" class="form-label"> Identificacion </label>
            <input type="number" class="form-control"  name="identificacion" required value="<?php echo $identificacion?>">
        </div>

        <div class="col-6">
            <label for="tel" class="form-label"> Telefono </label>
            <input type="number" class="form-control" name="telefono"  required value="<?php echo $telefono?>">

        </div>

        

        <div class="col-6">
            <label for="inputAddress" class="form-label"> Salario </label>
            <input type="number" class="form-control" name="salario" required value="<?php echo $salario?>">
        </div>

        <div class="col-6">
            <label for="date" class="form-label"> Fecha de Nacimiento </label>
            <input type="date" min="1973-01-01" max="2004-12-31" class="form-control" name="fecha" required value="<?php echo $fecha?>">
        </div>

        <div class="col-6">
            <label for="inputAddress" class="form-label"> Meses </label>
            <input type="text" class="form-control" name="pago" required value="<?php echo $pago?>">
        </div> 

    


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Guardar cotización</button>
        </div>
    </form>



</div>
   
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>


</body>
</html>
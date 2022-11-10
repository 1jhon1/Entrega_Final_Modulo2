<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ver datos </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 style= "text-align: center">Seguros Registrados</h1>
   
    <br>
        <?php 
        $username = "root"; 
        $password = ""; 
        $database = "proyecto"; 
        $mysqli = new mysqli("localhost", $username, $password, $database); 
        $query = "SELECT * FROM persona";

      
        echo '<table border="0" cellspacing="2" cellpadding="2" class="table table-striped table-bordered"> 
        <thead>
        <tr>
        <th scope="col">Nombres</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Id</th>
        <th scope="col">Telefono</th>
        <th scope="col">Salario</th>
        <th scope="col">FechaNac</th>
        <th scope="col">Pago</th>
        </tr>
        </thead>
        ';

        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $nombres = $row["nombres"];
                $apellidos = $row["apellidos"];
                $identificacion = $row["identificacion"];
                $telefono = $row["telefono"];
                $salario = $row["salario"]; 
                $fecha = $row["fechanac"]; 
                $pago = $row["formapago"]; 

                echo '
                <tbody class="table-group-divider">
                
                    <tr> 
                        <td>'.$nombres.'</td> 
                        <td>'.$apellidos.'</td> 
                        <td>'.$identificacion.'</td> 
                        <td>'.$telefono.'</td> 
                        <td>'.$salario.'</td> 
                        <td>'.$fecha.'</td> 
                        <td>'.$pago.'</td> 
                    </tr>
                    
                </tbody>';
            }
            $result->free();
        } 
        ?>
    
    <div>
        <center>
            <form method="POST" action="MostrarConsulta.php" >
                <input type="id" name="id" placeholder="ID" />
                <button type="submit">Consultar Registro</button>
            </form>
	    </center>
    </div>

    <div>
        <a href="FormularioPersonas.php" class="btn btn-success">Inicio</a>
        <a href="pdf.php" style="float: right;" class= "btn btn-primary">Imprimir</a>
    </div>
       
        

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    
</body>
</html>
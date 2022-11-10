<?php
require('pdf/fpdf.php');

class PDF extends FPDF
{
function Header()
{
    $this->SetFont('Arial','B',13);
    $this->Cell(60);
    $this->Cell(70,10,'Reporte de Seguros',0,0,'C');
    $this->Ln(20);

    $this->Cell(30,10, 'Nombres', 1, 0, 'c',0);
    $this->Cell(35,10, 'Apellidos', 1, 0, 'c',0);
    $this->Cell(30,10, 'Id', 1, 0, 'c',0);
    $this->Cell(25,10, 'Telefono', 1, 0, 'c',0);
    $this->Cell(25,10, 'Salario', 1, 0, 'c',0);
    $this->Cell(25,10, 'FechaNac', 1, 0, 'c',0);
    $this->Cell(20,10, 'pago', 1, 1, 'c',0);
}

function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$username = "root"; 
$password = ""; 
$database = "proyecto"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 


$consulta = "SELECT * FROM persona";
$resultado = $mysqli->query($consulta);


$pdf = new PDF();
$pdf->AliasNbpages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado -> fetch_assoc()){
    $pdf->Cell(30,10, $row['nombres'], 1, 0, 'c',0);
    $pdf->Cell(35,10, $row['apellidos'], 1, 0, 'c',0);
    $pdf->Cell(30,10, $row['identificacion'], 1, 0, 'c',0);
    $pdf->Cell(25,10, $row['telefono'], 1, 0, 'c',0);
    $pdf->Cell(25,10, $row['salario'], 1, 0, 'c',0);
    $pdf->Cell(25,10, $row['fechanac'], 1, 0, 'c',0);
    $pdf->Cell(20,10, $row['formapago'], 1, 1, 'c',0);

}


$pdf->Output();
?>
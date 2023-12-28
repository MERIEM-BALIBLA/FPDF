<?php
    require_once ("Pdf.php");
    require_once ("Data.php");
    

    // if (isset($_POST['generate_pdf'])) {
    $con = new Data();
    $pdo = $con -> conexion();

    
    $pdf = new Pdf();

    $pdf -> AddPage();

    $pdf -> SetFont('Arial','B',15);
    $pdf -> Cell(0,12,'Hello world',1,1,'C');
    
    
$pdf -> MultiCell(0,12,'rtyuiop^dfghjai la possibilité davoir un e-ticket electronique en format soit PDF ou Imagertyuiop^dfghjai la possibilité davoir un e-ticket electronique en format soit PDF ou Imagertyuiop^dfghjai la possibilité davoir un e-ticket electronique en format soit PDF ou Imagertyuiop^dfghjai la possibilité davoir un e-ticket electronique en format soit PDF ou Image',0,1);

$pdf -> SetFillColor(255,0,255);

$pdf -> Cell(20,10,'Name',1,0,'C',true);
$pdf -> Cell(30,10,'Product',1,0,'C',true);
$pdf -> Cell(20,10,'Price',1,0,'C',true);
$pdf -> Cell(0,10,'Description',1,1,'C',true);


    // $pdf -> Cell('')
    $query = $pdo -> query('SELECT * FROM info');
    while ($row = $query -> fetch(PDO :: FETCH_ASSOC)){
        $pdf -> SetFont('Arial','',12);
        $pdf -> Cell(20,10,$row['name'],'RL',0);
        $pdf -> Cell(30,10,$row['product'],'RL',0);
        $pdf -> Cell(20,10,$row['price'],'RL',0);
        if($pdf -> GetStringWidth($row['description']) > 40){
            $pdf -> SetFont('Arial','',8);
            $pdf -> Cell(0,10,$row['description'],'RL',1);
        }else
            $pdf -> Cell(0,10,$row['description'],'RL',1);
    }
    $pdf -> Cell(190,0,'','T',1,); //tracer une ligne


    $pdf->Output();


    

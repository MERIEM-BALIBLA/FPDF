<?php
    require_once ("Pdf.php");
    require_once ("Data.php");
    

    // if (isset($_POST['generate_pdf'])) {
    $con = new Data();
    $pdo = $con -> conexion();

    
    $pdf = new Pdf();

    $pdf -> AddPage();

    $pdf -> SetFont();
    
    // $pdf -> SetFont('Arial','B',12);
    // $pdf -> Cell(0,12,'hello world',0,1);

    $pdf->Output();


    // }

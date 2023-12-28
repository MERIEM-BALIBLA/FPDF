<?php
    require_once 'Pdf.php';
    require_once 'Data.php';

    if (isset($_POST['generate_pdf'])) {
    $con = new Data();
    $pdo = $con -> conexion();

    function header(){

    }

    function footer(){
        
    }
    // $pdf = new Pdf();
    }
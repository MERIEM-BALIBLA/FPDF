<?php
    require_once 'Data.php';
    require_once 'fpdf186/fpdf.php';
    class Pdf extends FPDF {


        public function __construct(){
            parent::__construct();
            $con = new Data();
            $this->PDO = $con->conexion();
        }

    }
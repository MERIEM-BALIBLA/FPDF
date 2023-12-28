<?php
    require_once 'fpdf186/fpdf.php';
    require_once ("Data.php");

    class Pdf extends FPDF {
        private $PDO;
    
        public function __construct(){
            parent::__construct();
            $con = new Data();
            $this->PDO = $con->conexion();
        }
    
        function header(){
    
        }
    
        function footer(){
    
        }
    }
    
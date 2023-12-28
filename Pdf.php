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
            $this -> SetFont('Arial','',10);

            $this -> Image('pic.jpg',10,10,6,6);
            $this -> Cell(50,12,'StadiumStream',0,1);
            $this -> ln(12);
          
        }
        
    
        function footer(){
            $this -> SetFont('Arial','I',14);
            $this -> AliasNbPages('{pages}');
            $this -> SetY(-12);

            $this -> Cell(0,12,'Pages ' . $this -> PageNo() . '/{pages}',0,1,'C');
        }
    }
    
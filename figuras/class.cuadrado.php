<?php
class cuadrado extends figura implements formulas {
	private $lado;
    private $area;
    private $perimetro;
    private $tipo = 'cuadrado';
    // CONSTRUCTOR
    function __construct($l){
        parent::__construct($this->tipo,$this->area,$this ->perimetro);
        $this->lado = $l;
    }

    public function area(){
        $ld=$this->lado;
        $a=$ld*$ld;
        $this->area=$a;
    }

    public function perimetro(){
        $ld=$this->lado;
        $pe=$ld*4;
        $this->perimetro = $pe;
    }

    public  function GetArea(){
        return $this->area;
    }

    public function GetPerimetro(){
        return $this->perimetro;
    }
    
    public function GetTipo(){
        return $this->tipo;
    }
	
}
?>

<?php
class rectangulo extends figura implements formulas{
	private $lado1;
    private $lado2;
    private $area;
    private $perimetro;
    private $tipo = 'rectangulo';
    // CONSTRUCTOR
    function __construct($l1,$l2){
        parent::__construct($this->tipo,$this->area,$this ->perimetro);
        $this->lado1 = $l1;
        $this->lado2 = $l2;
    }

    public function area(){
        $ld1=$this->lado1;
        $ld2=$this->lado2;
        $a=$ld1*$ld2;
        $area=(($a+$b)/2)*$c*(sqrt(1-pow(((pow(($b-$a),2)+pow($c,2)-pow($d,2))/(2*$c*($b-$a))),2)));
        $this->area=$a;
    }

    public function perimetro(){
        $ld1=$this->lado1;
        $ld2=$this->lado2;
        $pe=($ld1*2)+($ld2*2);
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

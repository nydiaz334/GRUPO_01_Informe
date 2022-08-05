<?php
class triangulo extends figura implements formulas{
	private $lado1;
    private $lado2;
    private $lado3;
    private $area;
    private $perimetro;
    private $tipo = 'triangulo';
    // CONSTRUCTOR
    function __construct($l1,$l2,$l3){
        parent::__construct($this->tipo,$this->area,$this ->perimetro);
        $this->lado1 = $l1;
        $this->lado2 = $l2;
        $this->lado3 = $l3;
    }

    public function area(){
        $ld1=$this->lado1;
        $ld2=$this->lado2;
        $ld3=$this->lado3;
        if($ld1==$ld2 && $ld2==$ld3){
            $a=(($ld1)*($ld1)*sqrt(3))/4;
        }elseif($ld1==$ld2 || $ld1==$ld3 || $ld2==$ld3){
            if($ld1==$ld2){
                $o=($ld1*$ld2)-(($ld3*$ld3)/4);
                $h=sqrt($o);
                $a=($ld3*$h)/2;
            }elseif($ld1==$ld3){
                $o=($ld1*$ld3)-(($ld2*$ld2)/4);
                $h=sqrt($o);
                $a=($ld2*$h)/2;
            }else{
                $o=($ld2*$ld3)-(($ld1*$ld1)/4);
                $h=sqrt($o);
                $a=($ld1*$h)/2;
            }
        }else{
            $s=($ld1+$ld2+$ld3)/2;
            $a= $s*($s-$ld1)*($s-$ld2)*($s-$ld3);
        }
        $this->area=$a;
    }

    public function perimetro(){
        $ld1=$this->lado1;
        $ld2=$this->lado2;
        $ld3=$this->lado3;
        $pe=$ld1+$ld2+$ld3;
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


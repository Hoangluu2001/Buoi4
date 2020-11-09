<?php
class QuadraticEquation {
    public $a;
    public $b;
    public $c;

    function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getRoot1(){
        $delta =( $this->b * $this->b -4 *( $this->a * $this->c ));
        if ($delta > 0) {
         return "pt co nghiem la :" ."X1 :" . $x1 = (-$this->b + sqrt($delta)) / 2 * $this->a ."<br>" ."X2:".  $x2 = (-$this->b - sqrt($delta))/2*$this->a;

        }else if ($delta==0){
            return "pt co nghiem la :" . (-$this->b + sqrt($delta)) / 2 * $this->a ;

        }else{
            return "pt ko co nghiem ";
        }
    }

}
$a = 1;
$b = 5 ;
$c = 5 ;
$tinh = new QuadraticEquation($a,$b,$c);
echo $tinh->getRoot1();

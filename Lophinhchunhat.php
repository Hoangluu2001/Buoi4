<?php
class Rectangle
{
    var $width;
    var $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function getPerimeter(){
        return(($this->width + $this->height) * 2);
    }
    public function display(){
        return "Rectangle{"."width=". $this->width.",height=".$this->height."}";
    }
}
$height = 20 ;
$width = 10 ;
$chunhat = new Rectangle($width ,$height);
//echo $chunhat->getArea();
echo $chunhat ->getPerimeter();
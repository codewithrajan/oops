<?php
//<h1> Area of rectangel </h1>

class rectangle
{
   public $x ,$y;
public function input($a,$b)
{
    $this->x=$a;
    $this->y=$b;
}
public function area()
{
    // $f=global['$x'];
    // $s=global['$y'];
    
    echo"area of rectangle=";
    echo $this->x*$this->y;
}
}


$obj=new rectangle();
$obj->input(12,2);
$obj->area();

?>
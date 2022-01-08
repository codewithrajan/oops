<?php
echo"<h1> inheritance in php</h1>";
class first
{
    protected $num1;
    function input($f)
    {
        $this->num1=$f;
    }
}

class Second extends first   //inherite the first class
{
    public $num2;
    function input2($s)
    {
        $this->num2=$s;
    }
    function add()
    {
        $sum=$this->num1+$this->num2;
        echo "<br><h2> addition=$sum<h2>" ;
    }
}

$obj=new second();
$obj->input(34);
$obj->input2(35);
$obj->add();

?>
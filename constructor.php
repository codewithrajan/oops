<?php
echo"constructor in php";

class employee
{
    public $name;
    public $roll;
    

    function __construct($name,$roll)
    {
        $this->name=$name;
        $this->roll=$roll;

    }

    function record()
    {
        echo"<br>";
        echo"name =$this->name and roll number=$this->roll<br>";
        
    }
    
}


$obj1=new employee("rajan",12);
$obj2=new employee("rahul",23);
$obj1->record();
$obj2->record();
?>
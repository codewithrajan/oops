<?php
echo"constructor in php";

class employee
{
    public $name;
    public $roll;
    
  //constructor in php
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
    //destructor in php 
    function __destruct()
    {
        echo"object is destroyed $this->name<br>";
    }
    
}


$obj1=new employee("rajan",12);
$obj2=new employee("rahul",23);

$obj3=new employee("anil",345);
$obj1->record();
$obj2->record();
$obj3->record();
?>
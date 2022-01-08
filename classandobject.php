<?php
echo"class and object in php";
echo"<br>print a number using class and object";
class rajan   //rajan is a class name
{
    public $num=12;  //$num is data member
    public function display()  //display is member function
    {
        echo"<h1>number is=$this->num</h1>";
    }
}

$obj=new rajan(); //$obj is object of rajan class
$obj->display();  //calling the display method


?>
<?php
class Vehicle {
   
    public $type;
    function move(){

        echo " سبحان الله". "<br>";
    }
}
class car extends Vehicle{
    function move(){

        echo "الحمدلله ". "<br>";
    }
}
class bike extends Vehicle{
    function move(){

        echo "الله أكبر ". "<br>";
    }
}
$one= new Vehicle;
$two= new car; 
$three= new bike; 
 $one-> move(); 
 $two-> move(); 
 $three-> move(); 

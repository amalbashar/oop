<?php
class Car {
   
   private $make;
   private $model;
   private $year;

    function setcar($ma, $mod, $ye){
        $this->make = $ma;
        $this->modle = $mod;
        $this->year = $ye;
     }
     function getcar(){
        echo $this->make ."<br/>";
        echo $this->modle ."<br/>";
        echo $this->year ."<br/>";
     }
    }

    $merc= new Car ;
    $kia=  new Car ;

    // $merc-> make;
   
?>




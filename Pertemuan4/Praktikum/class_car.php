<?php

   class Car {
      //hak akses: public, private, protected
      public $brand;
      public $color;

   //method
   function getBrand(){
      return $this->brand;
      }
   
   function getColor(){
      return $this->color;
      }
   }

   // object
   $tesla = new Car();
   $supra = new Car();

   // set value / setter
   $tesla ->brand = 'Tesla';
   $supra->brand = 'Supra';
   $tesla ->color = 'blue';
   $supra->color = 'black';
   

   // echo
   echo $tesla->getBrand();
   echo $tesla->getColor();
   echo '<br>';
   echo $supra->getBrand();
   echo $tesla->getColor();
   

?>
<?php
 function a($y="I am default value"){
    $x="I am from function";
    echo $x . " " .'but'." " .$y;
 }
 a();
 ?>
 <?php
  function b($course,$credit){
    echo "$course is of credit $credit";
  }
  echo "</br>";
  b("laravel",5);
  echo "</br>";
  b("php",6);
 ?>
 </br>
 <?php
   function add($x,$y){
    return ($x + $y);
   }
  echo add(2.2,"3 vals");//give a warning as we have string but prints the sum
  echo"</br>";
  echo add(5,3);
 ?>
<?php
 $course=array(
    "INT220"=> "php",
    "INT221" =>"laravel",
    "INT222" => "nodejs"
 );
 //main difference between enumerated array and associated array is enumerated array prints values and asociated array prints keys and values
 //echo "INT 220 is ".$course['INT220'].". INT 221 is ".$course['INT221'].". INT 222 is ".$course['INT222'];
//  $keys = array_keys($course);
//  $values = array_values($course);
//  for($x=0;$x<count($course);$x++){
//     echo "Key ".$keys[$x].','."Value=".$values[$x]."</br>";
//  }
$keys=array_keys($courses);
$values=array_values($course);
for($x=0;$x<count($course);$x++){
   echo "Key:". $keys($x) .","."Value:".$values($x)."</br>";
}
?>
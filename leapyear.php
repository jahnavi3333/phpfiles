<?php
$year=2014;
if(($year % 400 == 0) || (($year % 100 !=0 && $year %4 ==0))){
 echo "leap year";
}
 else{
    echo "not a leap year";
 }

?>
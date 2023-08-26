<?php
//there are no data types to be defined we can directly print a  variable value
$x = 'janu';
echo $x."</br>";
$a = 123;
echo $a."<br/>"; 
$a = 'LPU';
echo $a."<br/>";
$a = true;
echo $a."<br/>"; //boolean is given in 0or1
$a = 123.98;
echo $a."<br/>";
$a = null;
echo $a."<br/>";
$a = array(1,2,3,4,5);
for($i=0; $i<5; $i++){
    echo $a[$i]. ", ";
}
$a = array(1,2,3,4,5);
echo $a[3]."<br/>";

?>
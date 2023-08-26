<?php 
//&& precedeence is less than = so when used with boolean gives false
//and precedeence is more than = so when used with boolean gives true
$bool=true && false;
echo ($bool ? 'true' : 'false'),"</br>"; //o/p:false
$bool=true and false;
echo ($bool ? 'true' : 'false'),"</br>";//o/p:true
// $courses = array("PHP","laravel","mysql");
// echo "I like " . $courses[0] ."," .$courses[1] . "and" . $courses[2];
var_dump(false xor true);
echo "</br>";
var_dump(false xor false);
echo"</br>";
$result1 = true xor true;
echo "true xor true =";
echo $result1 ? 'true':"false";
echo"</br>";
$result2 = (true xor true);
echo "true xor true =";
echo $result2 ? 'true':"false";

?>

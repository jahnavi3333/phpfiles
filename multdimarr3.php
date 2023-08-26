<?php
$result = array(
array("Manoj",7.8,"pass"),
array("Aditya",8.5,"pass"),
array("Anuj",4.9,"fail")
);
 for($row=0;$row<3;$row++){
    echo"<p><b>Row number $row</b></p>";
    echo"<ul>";
    for ($col=0;$col<3;$col++){
        echo"<li>".$result[$row][$col]."</li>";
    }
echo"</ul>";
 }
?>
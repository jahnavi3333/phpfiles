<?php
$x = 10;
{
    $x = 21;
    echo $x."<br/>";
    function x($x =0){
        $x =18;
        echo $x."<br/>";
    }
    x(21);
    x();
    $x = 19;
}
echo $x."<br/>";
?>
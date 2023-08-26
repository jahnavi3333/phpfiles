<?php
   $a[0]=12;
   $a[1]="jan";
   $a[]= 4;
   $a[]="nik";
   $a[2]=NULL;
   $a[5]="ram";
   $a[6]=FALSE;
  print_r($a);//here we have different types of data types in 
  //an array so echo will not support to print so we use print_r
  echo "</br>";
?>
<?php
    $cars= array("jan","ram","nik");
    echo count($cars);
?>
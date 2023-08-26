<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php 
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
     if(($num1==0||$num1==1)&&($num2==0||$num2==1)){
        switch($num1){
            case 0:
                switch($num2){
                    case 0:
                        echo "Number : " . bindec("$num1$num2"). "<br>";
                        break;
                    case 1:
                        echo "Number 1 : " . bindec("$num1$num2") . "<br>";
                        break;
                }
                break;
            case 1:
                switch($num2){
                case 0:
                    echo "Number : " . bindec("$num1$num2"). "<br>";
                    break;
                case 1:
                    echo "Number 1 : " . bindec("$num1$num2") . "<br>";
                    break;
                }
                break;
        }
    }
     
     
     elseif(num1==null||num2==null){
        echo"enter some number";
     }
     else{
        echo"only 0 and 1 arec allowed";
     }
    ?>
    <form method="get" action="
    <?php echo $_SERVER['PHP_SELF'];?>">
   <label for="num1">Number1</label>
   
    <input type="text" name="num1" ><br>
    <label for="num2">Number2</label>
    <input type="text" name="num2" ><br>
    <input type="submit" value="submit">
  </form>
</body>
</html>
</html>

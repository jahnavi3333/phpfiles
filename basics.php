<html>
    <body>
        <p>I am HTML code with PHP</p>
        <?php
            // ! Printing the lines
            // echo "<b>I am first PHP code </b> <br/>";
            // echo "<i>I am second PHP code </i> <br/>";
            // "<br/>";
            // phpinfo();

            //! dynamic output change
            // echo "The addition of 3 + 4 is : ", 3+4, "<br/>"; 
            // echo "The subtraction of 12 - 4 is : ",(12 - 4), "<br/>";
            // echo "The multiplication of 3 * 4 is : ".(3*4), "<br/>";
            // print "The division of 28 / 4 is : ". (28 / 4). "<br/>";  //*we cannot use comma with print ,can only use dot(.)
                
            //! defining constant name 
            // define("Wishes", "Good Morning Everyone <br/>");
            // echo Wishes;

            //! Another way to defining constants
            // const LPU = "Good Morning LPU <br/>";
            // echo LPU; 

            //! To print or create the Variable , it should be start with $ symbol
            // $Number = 1000;
            // echo $Number;
            // echo("<br/>");

            //! Pass true for case-sensitive
            // define("Boolean", "True or False <br/>", false);
            // echo Boolean;

            //! Both are similar
            // define("wish", "Good Evening");
            // echo wish. "<br/>";
            // echo constant("wish"). "<br/>";  //*it is also a method to print constant , but you must add constant keywords;

            //! defining a constant as an array 
            // define("courses", [
            //     "PHP",
            //     "HTML",
            //     "CSS",
            //     "JavaScript",
            //     NULL,
            //      //*if we gave empty ,,, then it will show error so for empty value write NULL
            // ]);
            // echo "Printing array : ";
            // for($i=0; $i<4; $i++){
            //     echo (courses[$i]). ", ";
            // }
            // echo "<br/>";
            // echo " Printing only one element of an array : ".(courses[1]). "<br/>";

            // // for each loop is used to iterate over the items of an array or object and perform the same task for each item. 
            // $arr = array(1,2,3,4,5);
            // foreach($arr as $value){
            //     echo "Value is $value <br/>";
            // }
            

            // //! Block-Code
            // $x = 10;
            // echo $x. "<br/>";
            // {
            //     $x = 25;
            //     echo $x . "<br/>";
            // }

            // while ($x = 25){     
            //     echo "I am inside block my value is" .$x;
            // }    //*The loop will go on i infinite time
            //  echo $x . "<br/>";  //*it will print 25 outside block scope

            // while ($x != 25){     
            //     echo "I am inside block my value is" .$x;
            // }  //* This will print nothing on screen

            // while ($x = 25){ 
            //     $x = 14;    
            //     echo "I am inside block my value is" .$x. "<br/>";   //*here now it will print the value of x as 14 
            //     break;   //*it will break the infinite loop 
            // } 
            // echo $x;  //*now it will print value of x as 14;

            
            //! Integers
            // $a = 123.9999;       //*positive decimal integer
            // var_dump($a);   //*var_dump gives datatype
            // echo "<br/>";   //output :- int(123)
            //  $b = -123;    //*negative integer
            // var_dump($b);  
            // echo "<br/>";   //output :- int(-123)
            //  $c = 0x1A;    //*hexadecimal Number
            // var_dump($c);   
            // echo "<br/>";   //output :- int(26)
            //  $d = 0123;  //*octal number 
            // var_dump($d);  
            // echo "<br/>";   //output :- int(83)


        ?>
    </body>
</html>
<form method="post">
    <h1>Enter a Values</h1>
    <label>Enter Value1 :- </label>
    <input type="text" name="value1" placeholder="Enter a number"><br/><br/>
    <label>Enter Value2 :- </label>
    <input type="text" name="value2" placeholder="Enter a number"><br/><br/>
    <input type="submit" value="Calculate">
</form>

<?php
if($_POST != null){
    
    $value1 = $POST_[$value1];
    $value2 = $POST_[$value2];
    echo "The Addition of two numbers is :- ".($value1+$value2)."<br/>";
    echo "The Subtraction of two numbers is :- ".($value1-$value2)."<br/>";
    echo "The Multiplication of two numbers is :- ".($value1*$value2)."<br/>";
    echo "The Division of two numbers is :- ".($value1/$value2)."<br/>";
    echo "The Modulus of two numbers is :- ".($value1%$value2)."<br/>";
    echo "The Exponentiation of two numbers is :- ".($value1**$value2)."<br/>";
}
?>
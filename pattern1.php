<form method ="post">
    <input type="text" name="num">
    <input type = submit>
</form>

<?php
echo"<h1>INCREMENT</h1>";
echo "</br>";
if($_POST != null){
    $n = $_POST['num'];
    for($i=0;$i<=$n;$i++){
        for($j=1;$j<=$i;$j++){
            echo "*";
        }
        echo"</br>";
    }
}
?>
<?php
echo "<h1>DECREMENT </h1>";
echo"</br>";
if($_POST != null){
    $n = $_POST['num'];
    for($i=$n; $i>=1; $i--){
        for($j=1; $j<=$i; $j++){
            echo "* ";
        }
        echo "<br/>";
    }
}
?>
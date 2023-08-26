<form method="POST">
<input type="text" name='courses[]'> </br>
 <input type="text" name='courses[]'></br>
<input type="text" name='courses[]'></br>
<input type ="submit">
</form>
<?php
if($_POST)
{
    $courses = $_POST['courses'];
    foreach($courses as $course){
        echo $course . "</br>";
    }
}
?>


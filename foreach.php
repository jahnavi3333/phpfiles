<form method="POST">
<input type="text" name='n1'>
<input type="text" name='n2'>
<input type="text" name='n3'>
<input type="submit">
</form>
<?php
if($_POST)
{
$courses = array($_POST['n1'], $_POST['n2'], $_POST['n3']);
$courseslength = count($courses);
for($x = 0; $x <$courseslength; $x++) {
echo $courses[$x];
echo "<br>";
}

echo "<br>";

foreach($courses as $course){
echo $course . "<br>";
}
print_r($courses);
}
?>
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
echo "I like " . $courses[0] . ", " . $courses[1] . " and " . $courses[2];//here . is use for concatenation
echo "<br>";
echo count($courses);
}
?>
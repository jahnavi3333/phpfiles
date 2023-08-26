<form method="post">
<h1>Weather experience feedback</h1>
City <input type="text" name="city">
Month <input type="text" name="month">
Year <input type="text" name="year">

<p>Choose the weather you have experienced</p>
<input type="checkbox" name="weather[]" value="rain">Rain<br>
<input type="checkbox" name="weather[]" value="sunshine">Sunshine<br>
<input type="checkbox" name="weather[]" value="clouds">Clouds<br>
<input type="checkbox" name="weather[]" value="hail">Hail<br>
<input type="checkbox" name="weather[]" value="sleet">Sleet<br>
<input type="checkbox" name="weather[]" value="snow">Snow<br>
<input type="checkbox" name="weather[]" value="wind">Wind<br>
<input type="submit">
</form>

<?php
if($_POST)
{
$details = array(
$_POST['city'],
$_POST['month'],
$_POST['year']
);
echo "In $details[0] in the month of $details[1] $details[2], you observed the following weather:<br>";

$weather = $_POST['weather'];
foreach($weather as $weather)
{
echo "<li>$weather</li>";
}
}
?>
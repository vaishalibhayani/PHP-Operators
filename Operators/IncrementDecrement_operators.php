<?php
$x = 2;
echo ++$x, " First increments then prints \n";
echo $x, "\n";
echo "<br>";


$x = 2;
echo $x++, " First prints then increments \n";
echo $x, "\n";
echo "<br>";

$x = 2;
echo --$x, " First decrements then prints \n";
echo $x, "\n";
echo "<br>";

$x = 2;
echo $x--, " First prints then decrements \n";
echo $x;
echo "<br>";


//String Operators

$x = "BBW";
$y = "Berufbildungwerk";
$z = "Hamburg!!!";
echo $x . $y . $z, "\n";
echo "<br>";

$x .= $y . $z;
echo $x;


?>

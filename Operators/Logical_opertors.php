<?php
//1. AND (AND) or &&
//The AND operator returns true if both variables being compared are true.
$x = 100;
$y = 50;
if ($x == 100 and $y == 50) {
//if ($x == 100 && $y == 50) {
echo "AND is true";
}

//2. OR (OR) or  ||
//In a similar way, the OR operator works if either of the conditions is true.

$x1 = 100;
$y1 = 50;
if ($x1 == 100 or $y1 == 80) {
//if ($x == 100 || $y == 80) {
echo "XOR is TRUE";
}
 

//4. NOT
$x2 = 100;
if ($x2 !== 90) {
echo "NOT is here";
}
<?php
///1. comparing only numerical values/numbers using two variables
$pavan = 2;
$kumar = 5;
if($pavan==$kumar){
echo "TRUE : Because the two variable's values are same \n";
}
else{
echo "FALSE : Because the two variable's values are not same \n";
}

//Identical Comparison Operator (===)
//This identical operator will give results as TRUE if the two variables values belong to the same data type variables else the result will be FALSE.

$x1 = 100;
$y1 = "100";
var_dump($x1 === $y1); // will give result as false because types are not at all equal


//Not Equal Comparison Operator (!=)

$pavan1 = 1;
$sake1 = 2;
if($pavan1!=$sake1){
echo "TRUE :: variables values are not same as you expected";
}
else{
echo "FALSE :: variables values are same as not you expected";
}

//Not Equal Comparison Operator ( <>)

$pavan1 = 1;
$sake1 = 2;
if($pavan1<>$sake1){
echo "TRUE :: variables values are not same as you expected .";
}
else{
echo "FALSE :: variables values are same as not you expected";
}


//Not Identical Comparison Operator (!==)

$x2 = 100;
$y2 = "100";


//Less than Comparison Operator (<)


$x3 = 1473;
$y3 = 1474;
if($x3<$y3){
echo "x3 value :: $x3 \n";
echo "y3 value :: $y3 \n";
echo "x3 value is less than y3 value \n";
}
else{
echo "x3 value is less than y3 value";
}


//Greater than Comparison Operator (>)

$x4 = 2020;
$y4 = 2019;
echo "x4 value :: $x4 \n";
echo "y4 value :: $y4 \n";
if($x4>$y4){
echo "x4 value is greater than y4 value \n";
}
else{
echo "y4 value is less than x4 value";
}


//Less than or Equal to Comparison Operator (<=)

$x5 = 2020;
$y5 = 2020;
echo "x5 value :: $x5 \n";
echo "y5 value :: $y5 \n";
if($x5<=$y5){
echo "TRUE :: x5 value is less than or equal to y5 value \n";
}
else{
echo "FALSE :: y5 value is less than x5 value";
}

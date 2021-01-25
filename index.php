<!DOCTYPE html>
<html>
<head>
	<title>Php Tutorial</title>
</head>
<body>

<?php
//single line comment or #
/*Forward slash */
/*echo "Hello World<br>";
//to create variables use dollar sign
$a=10;
$b=21;
$str1="This is a string<br>";

var_dump(($str1)); //to check the data type and length of my data we will use var_dump in php

var_dump($a);

$B=123.33;
$T=true;
$F=False;
var_dump(($B));

echo $str1;
echo "<br>";
echo $a+$b;

echo "<br>";
$fruits=array('apple', 'banana', 'orange');
var_dump($fruits);*/

//------------------------------
/*$str1="Meghna";
echo strlen($str1),"<br>";
echo str_word_count($str1),"<br>";
echo strrev($str1);*/

//===================================
/*
echo "The value of 3 + 4 is ", 3+4, "<br>";
echo "The value of 3 - 4 is ", 3-4, "<br>";
echo "The value of 3 / 4 is ", 3/4, "<br>";
echo "The value of 3 ** 4 is ", 3**4, "<br>";
echo "The value of 3 % 4 is ", 3%4, "<br>";
$x=4;
echo $x, "<br>";

$x--;
echo $x;
*/

//---------------------------------------------

/*
$t=date("H");
if($t<"20")
{
	echo $t . "is a good time";
}

else
{
	echo "bad luck";
}
echo date_default_timezone_get(); 
*/

//-------------------------------------------------------

// $var1 = 5;

// while ( $var1<= 10) {
// 	echo "The current value of the variable is =>". $var1, "<br>";
// 	$var1++;
// }

//==============for loop====================

// for ($i=0; $i <10 ; $i++) { 
// 	echo "Hi ".$i,"<br>";
// }

//------------------------function---------

// function average_numbers($num1, $num2)
// {
// 	$average = ($num1 + $num2)/2;
// 	return $average;
// }
// echo average_numbers(3,4);

//====area of a circle================

// define("PI", 3.14);
// function area_circle($radius)
// {
// 	$area=PI*$radius*$radius;
// 	return $area;
// }
// echo area_circle(5);

//-----------------array operations===============

$numbers=array(4, 6, 2, 22, 11);
sort($numbers);

$len=count($numbers);
for ($i=0; $i <$len ; $i++) { 
	echo $numbers[$i];
	echo "<br>";
}
rsort($numbers);

$len=count($numbers);
for ($i=0; $i <$len ; $i++) { 
	echo $numbers[$i];
	echo "<br>";
}


?>

</body>
</html>
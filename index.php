<?php

$imageA = ['width'=> 250, 'height'=>500];
$imageB = ['width'=> 500, 'height'=>90];


print_r(contain($imageA, $imageB));

function contain($imageA, $imageB){

	$Wa = $imageA['width'];
	$Ha = $imageA['height'];
	$Wb = $imageB['width'];
	$Hb = $imageB['height'];

	$Rb = $Wb/$Hb; //ratio for imageB

	$Ra = $Wa/$Ha; //ratio for imageA

	$Wnew = $Ra > $Rb ? ($Wb * $Ha/$Hb) : ($Wa); //if ratio of imageA is greater then the Width for imageB is calculated WRT the ratio of height

	$Hnew = $Ra > $Rb ? ($Ha) : ($Hb * $Wa/$Wb); //if ratio of imageA is greater then the Height for imageB is calculated WRT the ratio of width
	
	return "W : ".$Wnew. " H : ".$Hnew;

}


?>

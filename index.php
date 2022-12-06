<?php
$Wb = 360;
$Hb = 200;
$Wa = 180;
$Ha = 250;

print_r(contain($Wb, $Hb, $Wa, $Ha));

function contain($Wb, $Hb, $Wa, $Ha){

	$Rb = $Wb/$Hb; //ratio for imageB

	$Ra = $Wa/$Ha; //ratio for imageA

	$Wnew = $Ra > $Rb ? ($Wb * $Ha/$Hb) : ($Wa);

	$Hew = $Ra > $Rb ? ($Ha) : ($Hb * $Wa/$Wb);
	
	return "W : ".$Wnew. " H : ".$Hew;

}


?>
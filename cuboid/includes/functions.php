<?php
//
// This file includes/functions.php contain function to solve problem.
//
// Change code in following function, as per need.

function moment_of_resistance($E, &$designParameter, &$designParameterRes)
{

// You may assign relavent names to input parameters

$b = $designParameter[0] ;
$d = $designParameter[1] ;
$h = $designParameter[2] ;

// Perform alculations to find results / values of output parameters
$Area = 2 * ( ($b*$d) + ($d*$h) + ($h*$b) ) ;
$Peri = 4 * ( $b * $d * $h) ;
$volume = ($b * $d * $h) ;
// Put output parameters in array in sequence / order.
$designParameterRes[] = $Area ; 
$designParameterRes[] = $Peri ;
$designParameterRes[] = $volume ;

// $designParameterRes[] = $otherParameters ; // other parameters ...
 
}

?>

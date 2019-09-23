<?php
header('Content-Type: application/json');
$aResult = array();


$racks = [];

if( !isset($_GET['subracks']) ) { $racks['error'] = 'No function name!'; }

if( !isset($_GET['arguments']) ) { $racks['error'] = 'No function arguments!'; }

if( !isset($racks['error']) ) {

        switch($_GET['subracks']) {
		case 'sub':
		 if( !is_array($_GET['arguments']) || (count($_GET['arguments']) < 1) ) {
                   $racks['error'] = 'Error in arguments!';
               }
		else {   

$myrack = 'arguments'[0];
for($i = 0; $i < pow(2, strlen($myrack)); $i++){

	$ans = "";

	for($j = 0; $j < strlen($myrack); $j++){

		//if the jth digit of i is 1 then include letter

		if (($i >> $j) % 2) {

		  $ans .= $myrack[$j];

		}

	}

	if (strlen($ans) > 1){

  	    $racks[] = $ans;	

	}

}

		}

$racks = array_unique($racks);



print_r($racks);



?>

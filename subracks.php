<?php
header('Content-Type: application/json');
$aResult = array();
$myrack = 'arguments'[0];

$racks = [];

if( !isset($_POST['subracks']) ) { $racks['error'] = 'No function name!'; }

if( !isset($_POST['arguments']) ) { $racks['error'] = 'No function arguments!'; }

if( !isset($racks['error']) ) {

        switch($_POST['subracks']) {
		case 'sub':
		 if( !is_array($_POST['arguments']) || (count($_POST['arguments']) < 2) ) {
                   $racks['error'] = 'Error in arguments!';
               }
		else {   


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

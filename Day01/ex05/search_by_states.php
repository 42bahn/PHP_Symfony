<?php
function search_by_states($str)
{
	$states = [
    'Oregon' => 'OR',
    'Alabama' => 'AL',
    'New Jersey' => 'NJ',
    'Colorado' => 'CO',
	];
	$capitals = [
		'OR' => 'Salem',
		'AL' => 'Montgomery',
		'NJ' => 'trenton',
		'KS' => 'Topeka',
	];
	
	$arr = explode(", ", $str);
	
	foreach ($arr as $element) {
		if (array_key_exists($element, $states)) {
			if (array_key_exists($states[$element], $capitals)) 
				echo $capitals[$states[$element]]." is the capital of ".$element."\n";
		}
		else if (($key = array_search($element, $capitals))) {
			if ( ($key = array_search($key, $states)) )
				echo $element." is the capital of ".$key."\n";
			else
				echo $element." is neither a capital nor a state.\n";
		}
		else 
			echo $element." is neither a capital nor a state.\n";
	}
}

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
	
	print_r($arr);
	
	foreach ($arr as $element) {
		foreach ($states as $key1 => $value1) {
			if ($element == $key1) {
				foreach ($capitals as $key2 => $value2) {
					if ($value1 == $key2) {
						echo $value2." is the capital of ".$element.".\n";
						continue ;
					}
				}
			}
		}
		foreach ($capitals as $key1 => $value1) {
			if ($element == $value1) {
				foreach ($states as $key2 => $value2) {
					if ($key1 == $value2) {
						echo $element." is the capital of ".$key2.".\n";
						continue ;
					}
				}
			}
		}
	}
	echo $element." is neither a capital nor a state.\n";

}

search_by_states("Oregon, trenton, Topeka, NewJersey");

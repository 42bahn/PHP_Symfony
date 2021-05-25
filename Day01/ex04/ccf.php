<?php

function capital_city_from($name)
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
	
	foreach ($states as $key1 => $value1){
		if ($name == $key1)	{
			foreach ($capitals as $key2 => $value2) {
				if ($value1 == $key2) {
					echo $value2."\n";
					return ;
				}
			}
		}
	}
	echo "Unknown\n";
}

capital_city_from("Alabama");
capital_city_from("Oregan");

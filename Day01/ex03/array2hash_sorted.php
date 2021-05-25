<?php
function array2hash_sorted($array) {
    $length = count($array);
    $idx = 0;
    while ($idx < $length)
    {
        $hash[$array[$idx][0]] = $array[$idx][1];
        $idx++;
    }
    krsort($hash);
    print ("Array\n(\n");
    foreach ($hash as $key => $value) {
        print ("\t");
        echo "[".$key."] => ".$value."\n";
    }
    print(")\n");
}
?>
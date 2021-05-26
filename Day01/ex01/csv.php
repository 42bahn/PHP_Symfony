<?php
$fp = fopen("ex01.txt", "r") or die ("Can't read this file\n");

while ( ($element = fgetcsv($fp, "100", ",")) !== FALSE) {
    $count = count($element);
    for ($idx = 0; $idx < $count; $idx++)
    {
        echo $element[$idx] . "\n";
    }
}
fclose($fp);
?>
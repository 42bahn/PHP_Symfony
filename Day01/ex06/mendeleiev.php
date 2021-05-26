<?php

function csv($file) {
    $fp = fopen($file, "r") or die ("Can't read this file\n");
    
    while ( ($element = fgetcsv($fp, "1000", "\n")) ) {
        $count = count($element);
        $array = explode(" = ", $element[0]);
        $info = explode(", ", $array[1]);
        
        foreach ($info as $key => $value) {
            $attr = explode(":", $value);
            $info["name"] = $array[0];
            $info[$attr[0]] = $attr[1];
            unset($info[$key]);
        }
        $mend[] = $info;
    }
    fclose($fp);
    return ($mend);
}

    $array = csv("ex06.txt");
   
    print_r ($array);
   
    $file = fopen("mendeleiev.html", "w");
    $html_start = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mendeleiev</title>
    </head>
    <body>
        <table>
            <tr>';
    
    $html_end = '</tr></table>
    </body>
    </html>';
    
    
    $idx = 0;
    $max = count($array);
    $sell = "";
    while ($idx < $max)
    {
        $sell = $sell."<td style='border: 1px solid black; padding:10px'>";
        $sell = $sell."<h4>".$array[$idx]["name"]."</h4>";
        $sell = $sell."<ul><li>No ".$array[$idx]["number"]."</li>";
        $sell = $sell."<li>".$array[$idx]["small"]."</li>";
        $sell = $sell."<li>".$array[$idx]["molar"]."</li></ul>";
        $sell = $sell."</td>";
        $idx += 1;
    }
    fwrite($file, $html_start.$sell.$html_end);
?>
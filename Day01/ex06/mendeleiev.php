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
    
    $sell = "";
    foreach ($array as $key => $value)
    {
        if ($value["position"] == 0) {
            $sell = $sell."<tr>";
        }
        if ($key !== $value["position"]) {
            $sell = $sell."<td>abc</td>";
        }
        $sell = $sell."<td style='border: 1px solid black; padding:10px'>";
        $sell = $sell."<h4>".$value["name"]."</h4>";
        $sell = $sell."<ul><li>No ".$value["number"]."</li>";
        $sell = $sell."<li>".$value["small"]."</li>";
        $sell = $sell."<li>".$value["molar"]."</li></ul>";
        $sell = $sell."</td>";
        if ($value["position"] == 17) {
            $sell = $sell."</tr>";
        }
    }
    fwrite($file, $html_start.$sell.$html_end);
?>
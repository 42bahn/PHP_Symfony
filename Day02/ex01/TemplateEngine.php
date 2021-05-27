<?php 
require_once("./Text.php");
class TemplateEngine {
    public function createFile($fileName, Text $array) {
        $file = fopen($fileName, "w");
        $html = "";
        foreach ($array as $key => $value) {
            $html = $html.$value;
        }
        $html = '<!DOCTYPE html>
        <html>
            <head>
                <title>ex02</title>
            </head>
            <body>'
            .$html.
            '</body>
        </html>';
        fwrite($file, $html);
    }
}
?>
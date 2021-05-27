<?php 
class TemplateEngine {
    public function createFile($fileName, $templateName, $parameters) {
        $file = fopen($fileName, "w");
        $templateName = '<!DOCTYPE html>
        <html>
            <head>
                <title>'.$parameters["nom"].'</title>
            </head>
            <body>
                <h1>'.$parameters["nom"].'</h1>
                <p>
                    Auteur: <b>'.$parameters["auteur"].'</b><br />
                    Description: '.$parameters["description"].'<br />
                    Prix: <b>'.$parameters["prix"].' &euro;</b>
                </p>
            </body>
        </html>';
        fwrite($file, $templateName);
    }
}
?>
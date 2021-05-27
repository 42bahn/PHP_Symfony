<?php 
class TemplateEngine {
    public function createFile(HotBeverage $text) {
        $file = fopen("menu.html", "w");
        $html = "";
        foreach ($array as $key => $value) {
            $html = $html.$value;
        }
        $html = '<!DOCTYPE html>
        <html>
            <head>
                <title>{nom}</title>
            </head>
            <body>
                <h1>{nom}</h1>
                <p>
                    Prix: {prix} &euro;<br />
                    Resistance au sommeil: {resistance}/5
                </p>
                <p>Description: {description}</p>
                <p>Commentaire: {commentaire}</p>
            </body>
        </html>';
        fwrite($file, $html);
    }
}
?>
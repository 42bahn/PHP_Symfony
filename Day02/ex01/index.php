<?php 
require_once("./TemplateEngine.php");
require_once("./Text.php");

$text = new Text();
$template = new TemplateEngine();

$text->textInput("Hello");
$text->textInput("World");
$text->textInput("Hello");
$text->textInput("bahn");
$template->createFile("index.html", $text->text);
?>
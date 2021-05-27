<?php 
require_once("./TemplateEngine.php");
require_once("./HotBeverage.php");

$beverage = new HotBeverage();
$template = new TemplateEngine();

$template->createFile("index.html", $beverage);
?>
<?php 
require_once 'TemplateEngine.php';
$template = new TemplateEngine();
$data = array(
    "nom"=>"42", 
    "auteur"=>"bahn",
    "description"=>"42",
    "prix"=>"420,000");
// print_r ($data);
$template->createFile("index.html", $template, $data);
?>
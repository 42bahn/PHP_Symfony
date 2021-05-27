<?php 
require_once("./Coffee.php");
require_once("./Tea.php");
class HotBeverage {
    public $text = array();

    public function textInput($string) {
        array_push($this->text, '<p>'.$string.'</p>');
    }
}
?>
<?php 
class Coffee {
    public $name;
    public $price;
    public $resistence;

    public function textInput($string) {
        array_push($this->text, '<p>'.$string.'</p>');
    }
}
?>
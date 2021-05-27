<?php 
class Text {
    public $text = array();

    public function textInput($string) {
        array_push($this->text, '<p>'.$string.'</p>');
    }
}
?>
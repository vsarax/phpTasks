<?php

class TextInput {
    protected $value = '';

    public function add($text) {
        $this->value .= $text;
    }

    public function getValue() {
        return $this->value;
    }
}

class NumericInput extends TextInput {
    public function add($text)
    {
        if ((is_int($text)) || (is_float($text))) {
            parent::add($text);
        }
    }
}

?>

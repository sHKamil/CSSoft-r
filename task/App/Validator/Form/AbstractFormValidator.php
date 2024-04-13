<?php

namespace App\Validator\Form;

abstract class AbstractFormValidator {

    public static function fieldLenght(String $text, Int $min = 0, Int $max = 100) : Bool
    {
        if(strlen($text) > $max) return false;
        if(strlen($text) < $min) return false;

        return true;
    }
}

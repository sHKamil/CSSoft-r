<?php

namespace App\Validator;

use App\Validator\Form\AbstractFormValidator;

class CompanyValidator extends AbstractFormValidator {

    public static function validate(String $company_name, String $address, String $nip, String $description) : Bool | Array
    {
        $buffer = [];
        $buffer = self::companyNameField($company_name, $buffer);
        $buffer = self::nipField($nip, $buffer);
        if($address !== '') $buffer = self::addressField($address, $buffer);
        if($description !== '') $buffer = self::descriptionField($description, $buffer);

        if(!empty($buffer)) return $buffer;

        return true;
    }

    private static function companyNameField(String $company_name, Array $buffer) : Array
    {
        if(!self::fieldLenght($company_name, 1, 100)) $buffer['company_name'] = 'Nieprawidłowa liczba znaków.';
        return $buffer;
    }
    
    private static function nipField(String $nip, Array $buffer) : Array
    {
        if(!empty($nip) && $nip[0] == "0") {
            $buffer['nip'] = 'NIP nie może zaczynać się od 0';
            return $buffer;
        }
        if(!self::fieldLenght($nip, 10, 10)) {
            $buffer['nip'] = 'Nieprawidłowa liczba znaków.';
            return $buffer;
        }
        return $buffer;
    }
    
    private static function addressField(String $address, Array $buffer) : Array
    {
        if(!self::fieldLenght($address, 1, 100)) $buffer['address'] = 'Nieprawidłowa liczba znaków.';
        return $buffer;
    }
    
    private static function descriptionField(String $description, Array $buffer) : Array
    {
        if(!self::fieldLenght($description, 1, 1000)) $buffer['description'] = 'Nieprawidłowa liczba znaków.';
        return $buffer;
    }
}

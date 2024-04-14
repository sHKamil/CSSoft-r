<?php

namespace App\Validator;

use App\Repository\CompanyRepository;
use App\Validator\Form\AbstractFormValidator;

class EmployeeValidator extends AbstractFormValidator {

    public static function validate(String $employee_name, String $last_name, String $phone, String $email, Int | NULL $company_id, String $description) : Bool | Array
    {
        $buffer = [];
        $buffer = self::textField($employee_name, 'employee_name', 1, 50, $buffer);
        $buffer = self::textField($last_name, 'last_name', 1, 50, $buffer);
        if($phone !== '') $buffer = self::textField($phone, 'phone', 9, 20, $buffer);
        if($company_id !== NULL) $buffer = self::companyField($company_id, 'company_id', $buffer);
        if($email !== '') $buffer = self::emailField($email, 'email', 0, 100, $buffer);
        if($description !== '') $buffer = self::textField($description, 'description', 0, 1000, $buffer);

        if(!empty($buffer)) return $buffer;

        return true;
    }

    private static function textField(String $field, String $field_name, Int $min, Int $max, Array $buffer) : Array
    {
        if(!self::fieldLenght($field, $min, $max)) $buffer[$field_name] = 'Nieprawidłowa liczba znaków.';
        return $buffer;
    }
    
    private static function emailField(String $email, String $field_name, Int $min, Int $max, Array $buffer) : Array
    {
        if(!self::fieldLenght($email, $min, $max)){
            $buffer[$field_name] = 'Nieprawidłowa liczba znaków.';
            return $buffer;
        } 
        if(!self::validEmail($email, $min, $max)) $buffer[$field_name] = 'Niepoprawny format e-mail.';
        return $buffer;
    }
        
    private static function companyField(Int $company_id, String $field_name, Array $buffer) : Array
    {
        $repository = new CompanyRepository();
        if($repository->getById(['id'=> $company_id])->rowCount() !== 1){
            $buffer[$field_name] = "Nie znaleziono takiej firmy.";
        }
        return $buffer;
    }
}

<?php

namespace App\Controllers;

use App\Repository\CompanyRepository;
use App\Repository\EmployeeRepository;
use App\Validator\EmployeeValidator;

class EmployeeController {

    public static function index()
    {
        $repository = new CompanyRepository();
        $companies = $repository->getAll();
        return view('employee', [
            'title' => 'Dodaj Pracownika',
            'companies' => $companies,
        ],[],['validateEmployeeForm']);
    }

    public static function createEmployee()
    {
        $repository = new CompanyRepository();
        $companies = $repository->getAll();

        $employee_name = isset($_POST['employee_name']) ? $_POST['employee_name'] : "";
        $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : "";
        $phone = isset($_POST['phone']) ? ($_POST['phone']) : "";
        $email = isset($_POST['email']) ? ($_POST['email']) : "";
        $id_company = isset($_POST['id_company']) ? (int) ($_POST['id_company']) : NULL;
        $description = isset($_POST['description']) ? $_POST['description'] : "";

        $valid = EmployeeValidator::validate($employee_name, $last_name, $phone, $email, $id_company, $description);
        if($valid !== true) {

            return view('company', [
                'title' => 'Dodaj Pracownika',
                'errors' => $valid,
                'companies' => $companies
            ], [], ['validateEmployeeForm']);
        }

        $repository = new EmployeeRepository();
        $repository->add([
            'id_firmy' => $id_company,
            'imie' => $employee_name,
            'nazwisko' => $last_name,
            'telefon' => $phone,
            'email' => $email,
            'opis' => $description
        ]);

        return view('employee',  [
            'title' => 'Dodaj Pracownika',
            'companies' => $companies,
        ], [], ['validateEmployeeForm']);
    }
}

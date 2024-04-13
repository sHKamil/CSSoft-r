<?php

namespace App\Controllers;

use App\Repository\CompanyRepository;
use App\Validator\CompanyValidator;

class CompanyController {

    public static function index()
    {
        return view('company', ['title' => 'Dodaj Firmę'],[],['validateCompanyForm']);
    }

    public static function createCompany()
    {
        $company_name = isset($_POST['company_name']) ? $_POST['company_name'] : "";
        $address = isset($_POST['address']) ? $_POST['address'] : "";
        $nip = isset($_POST['nip']) ? (string) ($_POST['nip']) : "";
        $description = isset($_POST['description']) ? $_POST['description'] : "";

        $valid = CompanyValidator::validate($company_name, $address, (int) $nip, $description);
        if($valid !== true) return view('company', ['title' => 'Dodaj Firmę', 'errors' => $valid], [], ['validateCompanyForm']);

        $repository = new CompanyRepository;
        $repository->add([
            'nazwa' => $company_name,
            'adres' => $address,
            'nip' => $nip,
            'opis' => $description
        ]);

        return view('company',  ['title' => 'Dodaj Firmę'], [], ['validateCompanyForm']);
    }
}

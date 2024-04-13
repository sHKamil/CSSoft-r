<?php

namespace App\Controllers;

class CompanyController {

    public static function index()
    {
        return view('company', ['title' => 'Dodaj Firmę'],[],['validateCompanyForm']);
    }
}

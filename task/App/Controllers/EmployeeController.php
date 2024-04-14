<?php

namespace App\Controllers;


class EmployeeController {

    public static function index()
    {
        return view('employee', ['title' => 'Dodaj Pracownika'],[],['validateEmployeeForm']);
    }

    public static function createEmployee()
    {


        return view('employee',  ['title' => 'Dodaj Pracownika'], [], ['validateEmployeeForm']);
    }
}

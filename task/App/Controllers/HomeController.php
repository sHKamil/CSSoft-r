<?php

namespace App\Controllers;

use App\Repository\CompanyRepository;
use App\Repository\EmployeeRepository;

class HomeController {

    public static function index()
    {

        $employeeRepository = new EmployeeRepository();
        $companyRepository = new CompanyRepository();
        $employeesWithCompany = $employeeRepository->getByWhere([], "id_firmy IS NOT NULL")->fetchAll();
        $employees = $employeeRepository->getAll();
        $companies = $companyRepository->getAll();
        $companiesWithEmployee = [];
        $employeesWithCompanyName = [];

        foreach ($companies as $company) {
            $companiesWithEmployee[$company['id']] = $company;
            foreach ($employeesWithCompany as $employeeWithCompany) {
                if($employeeWithCompany['id_firmy'] === $company['id']) {
                    $companiesWithEmployee[$company['id']]['employees'][] = $employeeWithCompany;
                }
            }
        }

        foreach ($employees as $employee) {
            $employeesWithCompanyName[$employee['id']] = $employee;
            if($employee['id_firmy'] !== NULL) {
                foreach ($companies as $company) {
                    if($employee['id_firmy'] === $company['id']) {
                        $employeesWithCompanyName[$employee['id']]['nazwa_firmy'] = $company['nazwa'];
                    }
                }
            }
        }

        return view('home', [
            'title' => 'Home Page',
            'employeesWithCompanyName' => $employeesWithCompanyName,
            'companiesWithEmployee' => $companiesWithEmployee
        ]);
    }
}

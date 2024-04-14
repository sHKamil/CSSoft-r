<?php

namespace App\Repository;

use App\Database\Database;
use App\Repository\Abstract\AbstractRepository;

class CompanyRepository extends AbstractRepository{

    public function __construct() {
        parent::__construct(new Database, 'firmy');
    }
}

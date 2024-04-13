<?php

namespace App\Repository;

use App\Database\Database;
use App\Services\DBQueryService;

class CompanyRepository {

    private $db;
    private $table;

    public function __construct() {
        $this->db = new Database;
        $this->table = "firmy";
    }

    public function getAll()
    {
        try
        {
            $result = $this->db->query("SELECT * FROM " . $this->table .";")->fetchAll();
            return $result;
        } catch (\PDOException $e) {
            echo "Insert query failed: " . $e->getMessage();
        }
        return false;
    }

    public function add(array $params = []) : bool
    {
        $columns = DBQueryService::getColumnsFromParams(array_keys($params));
        $placeholders = DBQueryService::getPlaceholdersFromParams(array_keys($params));
        try
        {
            if($this->db->query("INSERT INTO " . $this->table . "(" . $columns . ") VALUES (" . $placeholders . ")", $params) !== false) return true;
        } catch (\Exception $e) {
            echo "Insert query failed: " . $e->getMessage();
            exit;
        }
    }
}

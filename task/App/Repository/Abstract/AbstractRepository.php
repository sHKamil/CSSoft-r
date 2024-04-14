<?php

namespace App\Repository\Abstract;

use App\Services\DBQueryService;

abstract class AbstractRepository {

    private $db;
    private $table;

    public function __construct($db, $table) {
        $this->db = $db;
        $this->table = $table;
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

    public function getById(array $params = [])
    {
        $query = "SELECT * FROM " . $this->table . " WHERE id = :id;";
        try
        {
            $result = $this->db->query($query, $params);
            return $result;
        } catch (\PDOException $e) {
            echo "Delete query failed: " . $e->getMessage();
            return false;
        }
    }

    public function getByWhere(array $params, string $where){
        try
        {
            $result = $this->db->query("SELECT * FROM " . $this->table . " WHERE $where", $params);
            return $result;
        } catch (\PDOException $e) {
            echo "Insert query failed: " . $e->getMessage();
        }
        return false;
    }
}

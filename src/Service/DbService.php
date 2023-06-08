<?php

namespace src\Service;

use PDO;

class DbService
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=db;dbname=php_mvc_db", 'admin', 'admin');
        $this->pdo->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    }

    public function query($query): bool|\PDOStatement
    {
        return $this->pdo->query($query);
    }

    public function getData($query): bool|array
    {
        return $this->query($query)->fetchAll();
    }
}
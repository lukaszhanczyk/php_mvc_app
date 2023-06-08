<?php

namespace src\Service;

use src\Service\Adapter\CurrencyAdapter;

class CurrencyService
{
    private DbService $dbService;
    private CurrencyAdapter $currencyAdapter;
    private string $tableName = 'currency';

    public function __construct()
    {
        $this->dbService = new DbService();
        $this->currencyAdapter = new CurrencyAdapter();
    }

    public function getAll(): array
    {
        $rows = $this->dbService->getData("SELECT * FROM " . $this->tableName);
        return $this->currencyAdapter->adapt($rows);
    }
}
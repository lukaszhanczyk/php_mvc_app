<?php

namespace src\Service;

use src\Entity\Currency;
use src\Service\Adapter\CalculationAdapter;

class CalculatorService
{
    private DbService $dbService;
    private CalculationAdapter $calculationAdapter;
    private CurrencyService $currencyService;
    private string $tableName = 'calculation';


    public function __construct()
    {
        $this->dbService = new DbService();
        $this->calculationAdapter = new CalculationAdapter();
        $this->currencyService = new CurrencyService();
    }

    public function getAll(): array
    {
        $rows = $this->dbService->getData("SELECT * FROM " . $this->tableName);
        return $this->calculationAdapter->adapt($rows);
    }

    public function store($request): void
    {
        $currencyFrom = $this->currencyService->getOneByCode($request['currency_from']);
        $currencyTo = $this->currencyService->getOneByCode($request['currency_to']);

        $valueTo = $this->calculate($request['value'], $currencyFrom, $currencyTo);
        $query = "INSERT INTO `" . $this->tableName . "`(`currency_code_from`, `currency_code_to`, `value_from`, `value_to`) VALUES ('" . $currencyFrom->getCode() . "','" . $currencyTo->getCode() . "','" . $request['value'] . "', '" . $valueTo . "')";
        $this->dbService->query($query);
    }

    private function calculate(int $value, Currency $currencyFrom, Currency $currencyTo): float
    {
        return round($value * $currencyFrom->getMid() / $currencyTo->getMid(), 2);
    }
}
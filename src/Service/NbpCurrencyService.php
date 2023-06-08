<?php

namespace src\Service;

use src\Entity\Currency;
use src\Service\Adapter\CurrencyAdapter;

class NbpCurrencyService
{
    private DbService $dbService;
    private NbpService $nbpService;
    private CurrencyAdapter $currencyAdapter;

    public function __construct()
    {
        $this->dbService = new DbService();
        $this->nbpService = new NbpService();
        $this->currencyAdapter = new CurrencyAdapter();
    }

    public function updateRows(): void
    {
        $this->dbService->query("TRUNCATE TABLE currency");
        $currenciesRaw = $this->nbpService->getData()[0]['rates'];
        $currencies = $this->currencyAdapter->adapt($currenciesRaw);

        foreach ($currencies as $currency){
            $query = "INSERT INTO `currency`(`currency`, `code`, `mid`) VALUES ('" . $currency->getName() . "', '" . $currency->getCode() . "', " . $currency->getMid() . ")";
            $this->dbService->query($query);
        }
    }
}
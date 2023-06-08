<?php

namespace src\Service\Adapter;

use src\Entity\Currency;

class CurrencyAdapter
{
    public function adapt($currenciesRaw): array
    {
        $currencies = [];

        foreach ($currenciesRaw as $currency){
            $currencies[] = $this->adaptOne($currency);
        }

        return $currencies;
    }

    public function adaptOne($currencyRaw): Currency
    {
        return new Currency(
            $currencyRaw['id'] ?? null,
            $currencyRaw['currency'],
            $currencyRaw['code'],
            $currencyRaw['mid'],
        );
    }
}
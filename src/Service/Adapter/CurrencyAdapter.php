<?php

namespace src\Service\Adapter;

use src\Entity\Currency;

class CurrencyAdapter
{
    public function adapt($currenciesRaw): array
    {
        $currencies = [];

        foreach ($currenciesRaw as $currency){
            $currencies[] = new Currency(
                $currency['id'] ?? null,
                $currency['currency'],
                $currency['code'],
                $currency['mid'],
            );
        }

        return $currencies;
    }
}
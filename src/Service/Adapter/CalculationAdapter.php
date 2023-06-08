<?php

namespace src\Service\Adapter;

use src\Entity\Calculation;

class CalculationAdapter
{
    public function adapt($calculationsRaw): array
    {
        $calculations = [];

        foreach ($calculationsRaw as $calculation){
            $calculations[] = $this->adaptOne($calculation);
        }

        return $calculations;
    }

    public function adaptOne($calculationRaw): Calculation
    {
        return new Calculation(
            $calculationRaw['id'] ?? null,
            $calculationRaw['currency_code_from'],
            $calculationRaw['currency_code_to'],
            $calculationRaw['value_from'],
            $calculationRaw['value_to']
        );
    }
}
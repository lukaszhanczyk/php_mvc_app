<?php

namespace src\Entity;

class Calculation
{
    private ?int $id;
    private string $currencyCodeFrom;
    private string $currencyCodeTo;
    private float $valueFrom;
    private float $valueTo;

    /**
     * @param int|null $id
     * @param string $currencyCodeFrom
     * @param string $currencyCodeTo
     * @param float $valueFrom
     * @param float $valueTo
     */
    public function __construct(?int $id, string $currencyCodeFrom, string $currencyCodeTo, float $valueFrom, float $valueTo)
    {
        $this->id = $id;
        $this->currencyCodeFrom = $currencyCodeFrom;
        $this->currencyCodeTo = $currencyCodeTo;
        $this->valueFrom = $valueFrom;
        $this->valueTo = $valueTo;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCurrencyCodeFrom(): string
    {
        return $this->currencyCodeFrom;
    }

    /**
     * @param string $currencyCodeFrom
     */
    public function setCurrencyCodeFrom(string $currencyCodeFrom): void
    {
        $this->currencyCodeFrom = $currencyCodeFrom;
    }

    /**
     * @return string
     */
    public function getCurrencyCodeTo(): string
    {
        return $this->currencyCodeTo;
    }

    /**
     * @param string $currencyCodeTo
     */
    public function setCurrencyCodeTo(string $currencyCodeTo): void
    {
        $this->currencyCodeTo = $currencyCodeTo;
    }

    /**
     * @return float
     */
    public function getValueFrom(): float
    {
        return $this->valueFrom;
    }

    /**
     * @param float $valueFrom
     */
    public function setValueFrom(float $valueFrom): void
    {
        $this->valueFrom = $valueFrom;
    }

    /**
     * @return float
     */
    public function getValueTo(): float
    {
        return $this->valueTo;
    }

    /**
     * @param float $valueTo
     */
    public function setValueTo(float $valueTo): void
    {
        $this->valueTo = $valueTo;
    }
}
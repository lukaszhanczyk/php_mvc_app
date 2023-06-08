<?php

namespace src\Entity;

class Currency
{
    private ?int $id;
    private string $name;
    private string $code;
    private float $mid;

    /**
     * @param string $name
     * @param string $code
     * @param float $mid
     */
    public function __construct(int $id = null, string $name, string $code, float $mid)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->mid = $mid;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return float
     */
    public function getMid(): float
    {
        return $this->mid;
    }

    /**
     * @param float $mid
     */
    public function setMid(float $mid): void
    {
        $this->mid = $mid;
    }


}
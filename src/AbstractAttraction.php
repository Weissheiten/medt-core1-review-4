<?php

namespace Webt\MedtCore1Review;

abstract class AbstractAttraction
{
    protected string $name;
    protected float $fee;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getFee(): float
    {
        return $this->fee;
    }

    /**
     * @param string $name
     * @param float $fee
     */
    public function __construct(string $name, float $fee)
    {
        $this->name = $name;
        $this->fee = $fee;
    }
}
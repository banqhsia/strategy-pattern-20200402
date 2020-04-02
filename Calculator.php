<?php

class Calculator
{
    /**
     * @var Fare
     */
    private $fare;

    /**
     * Construct
     *
     * @param Fare $fare
     */
    public function __construct(Fare $fare)
    {
        $this->fare = $fare;
    }

    /**
     * 取得運費
     *
     * @param Freight $freight
     * @return float
     */
    public function getPrice(Freight $freight)
    {
        return $this->fare->getPrice($freight);
    }
}

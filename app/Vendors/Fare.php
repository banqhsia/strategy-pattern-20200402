<?php

namespace App\Vendors;

use App\Freight;

class Fare
{
    /**
     * @var Freight
     */
    protected $freight;

    /**
     * 基礎費率
     *
     * @var int
     */
    protected $basic = 0;

    /**
     * 每公斤計費
     *
     * @var int
     */
    protected $chargesPerKilogram = 0;

    /**
     * Construct
     *
     * @param Freight $freight
     */
    public function __construct(Freight $freight)
    {
        $this->freight = $freight;
    }

    /**
     * 取得運費
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->basic +
            ($this->freight->getWeight() * $this->chargesPerKilogram);
    }
}

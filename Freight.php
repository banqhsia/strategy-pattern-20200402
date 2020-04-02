<?php

class Freight
{
    /**
     * @var string
     */
    private $vendor;

    /**
     * @var string
     */
    private $reigon;

    /**
     * @var float
     */
    private $weight;

    /**
     * Construct
     *
     * @param string $vendor
     * @param string $reigon
     * @param float $weight
     */
    public function __construct(string $vendor, string $reigon, float $weight)
    {
        $this->vendor = $vendor;
        $this->reigon = $reigon;
        $this->weight = $weight;
    }

    /**
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }

    /**
     * @return string
     */
    public function getReigon()
    {
        return $this->reigon;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }
}

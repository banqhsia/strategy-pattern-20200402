<?php

class VendorFactory
{
    /**
     * 建立 Fare 運費物件
     *
     * @param Freight $freight
     * @return Fare
     *
     * @throws \RuntimeException
     */
    public static function createFare(Freight $freight)
    {
        $class = static::buildFareName($freight);

        if (class_exists($class)) {
            return new $class($freight);
        }

        throw new \RuntimeException("Fare {$class} not found.");
    }

    /**
     * 取得 Fare 的名稱
     *
     * @param Freight $freight
     * @return string
     */
    protected static function buildFareName(Freight $freight)
    {
        $vendor = ucfirst($freight->getVendor());
        $reigon = ucfirst($freight->getReigon());

        return "{$vendor}{$reigon}Fare";
    }
}

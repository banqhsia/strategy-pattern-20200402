<?php

use App\Freight;
use App\Calculator;
use App\Vendors\VendorFactory;

require_once __DIR__ . '/vendor/autoload.php';

$freight = new Freight('dog', 'us', '140');

$fare = VendorFactory::createFare($freight);

$calculator = new Calculator($fare);

print $calculator->getPrice($freight);

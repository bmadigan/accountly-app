<?php

namespace App\Traits;

use Cknow\Money\Money;

trait Currency
{
    // $5.00
    public static function displayFormat($cents)
    {
        return Money::USD($cents)->format();
    }

    // 5.00
    public static function displayDecimal($cents)
    {
        return Money::USD($cents)->formatByDecimal();
    }

    public static function add($from, $to)
    {
        return Money::USD($from)->add(Money::USD($to));
    }

    public static function subtract($from, $to)
    {
        return Money::USD($from)->subtract(Money::USD($to));
    }
}

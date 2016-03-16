<?php

/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 16-3-16
 * Time: 17:08
 */
class Tax
{
    private $taxRate;
    public function __construct($taxRate)
    {
        $this->taxRate = $taxRate;
    }

    public function getTaxRate()
    {
        return $this->taxRate;
    }
}
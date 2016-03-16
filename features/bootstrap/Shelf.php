<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 16-3-16
 * Time: 16:06
 */


/**
 * Class Shelf
 * @package Battle
 */
class Shelf
{

    private $priceMap = array();

    public function setProductPrice($product, $price)
    {
        $this->priceMap[$product] = $price;
    }

    public function getProductPrice($product)
    {
        return $this->priceMap[$product];
    }
}
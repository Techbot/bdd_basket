<?php
/**
 * Created by PhpStorm.
 * User: techbot
 * Date: 16-3-16
 * Time: 16:10
 */


/**
 * Class Basket
 * @package Battle
 */
class Basket implements \Countable
{
    private $shelf;
    private $products;
    private $productsPrice = 0.0;
    private $taxRate;

    public function __construct(Shelf $shelf)
    {
        $this->shelf = $shelf;
        $this->taxRate = new Tax(0.2);
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
        $this->productsPrice += $this->shelf->getProductPrice($product);
    }

    public function getTotalPrice()
    {


        return $this->productsPrice
        + ($this->productsPrice * $this->taxRate)
        + ($this->productsPrice > 10 ? 2.0 : 3.0);
    }

    public function count()
    {
        return count($this->products);
    }
}
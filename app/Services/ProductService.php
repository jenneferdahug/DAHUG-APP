<?php

namespace App\Services;

class ProductService
{
    private $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function listProducts()
    {
        return $this->products;
    }

    /**
     * Insert a new product
     */
    public function insert($products)
    {
        return $this->products[] = $products;
    }
  
}
<?php
class Product extends Model
{
    public function getFullProducts()
    {
        $products = ['sp1', 'sp2', 'sp3'];
        return $products;
    }
}

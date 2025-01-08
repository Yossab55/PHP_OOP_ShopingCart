<?php

namespace classes;

class CartItem
{
    private Product $product;
    private int $quantity;

    public function __construct($product, $quantity)
    {
        $this->set_product($product);
        $this->set_quantity($quantity);
    }
    
    public function set_product($product) 
    {
        $this->product = $product;
    }
    public function set_quantity($quantity) 
    {
        $this->quantity += $quantity;
        if($this->quantity > $this->product->get_availableQuantity())
            $this->quantity = $this->product->get_availableQuantity();
    }
    public function get_product()
    {
        return $this->product;
    }
    public function increaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: $quantity must not become more than whatever is Product::$availableQuantity
    }

    public function decreaseQuantity()
    {
        //TODO $quantity must be increased by one.
        // Bonus: Quantity must not become less than 1
    }
}
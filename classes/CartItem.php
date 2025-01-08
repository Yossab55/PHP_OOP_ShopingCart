<?php


class CartItem
{
    private Product $product;
    private int $quantity = 0;

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
        if($this->quantity == 0) $this->quantity = 1;
    }
    public function get_product()
    {
        return $this->product;
    }
    public function get_quantity()
    {
        return $this->quantity;
    }
    public function increaseQuantity()
    {
        $this->set_quantity(1);
    }

    public function decreaseQuantity()
    {
        $this->set_quantity(-1);
    }
}
<?php
use classes;

namespace classes;

class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $availableQuantity;

    public function __construct($id, $title, $price, $availableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->availableQuantity = $availableQuantity;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function get_title()
    {
        return $this->title;
    }
    public function get_price()
    {
        return $this->price;
    }
    public function get_availableQuantity()
    {
        return $this->availableQuantity;
    }
    public function set_id($id)
    {
        $this->id = $id;
    }
    public function set_title($title)
    {
        $this->title = $title;
    }
    public function set_price($price)
    {
        $this->price = $price;
    }
    public function set_availableQuantity($availableQuantity)
    {
        $this->availableQuantity = $availableQuantity;
    }
    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        $items = $cart->get_items();
        $item = null;
        
        for($i = 0; $i < count($items); $i++) {
            if($items[$i]->get_product()->get_id() == $this->get_id()) {
                $item = $items[$i];
            }
        }
        if($item == null) $item = new CartItem($this, $quantity);
        return $item;
    }

    /**
     * Remove product from cart
     *
     * @param Cart $cart
     */
    public function removeFromCart(Cart $cart)
    {
        //TODO Implement method
    }
}
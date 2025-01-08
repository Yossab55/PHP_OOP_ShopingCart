<?php

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
        for($i = 0; $i < count($items); $i++) {
            if($items[$i]->get_product()->get_id() == $this->get_id()) {
                $item = $items[$i];
                $item->set_quantity($items);
                $items[$i] = $item;
                $cart->set_items($items);
                return $item;
            }
        }
        $item = new CartItem($this, $quantity);
        array_push($items, $item);
        $cart->set_items($items);
        return $item;
    }
    public function removeFromCart(Cart $cart)
    {
        $items = $cart->get_items();
        for($i = 0; $i < count($items); $i++) {
            if($items[$i]->get_product()->get_id() == $this->get_id())
            {
                $cart->set_items(array_slice($items, 0, $i) + array_slice($items, $i + 1));
                return;
            }
        }
    }
}
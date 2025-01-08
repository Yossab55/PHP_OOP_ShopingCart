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
    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     */
    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        $item = new CartItem();

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
<?php

namespace classes;
class Cart
{
    /**
     * @var CartItem[]
     */
    private array $items = [];

    public function get_items() 
    {
        return $this->items;
    }
    public function set_items($items) 
    {
        $this->items = $items;
    }
    /**
     * Add Product $product into cart. If product already exists inside cart
     * it must update quantity.
     * This must create CartItem and return CartItem from method
     * Bonus: $quantity must not become more than whatever
     * is $availableQuantity of the Product
     *
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     */
    public function addProduct(Product $product, int $quantity): CartItem
    {
        $items = $this->get_items();
        for($i = 0; count($items); $i++) {
            if($items[$i]->get_product()->get_id() === $product->get_id()) {
                $item = $items[$i];
                $item->set_quantity($quantity);
                return $item;
            }
        }  
        $item = new CartItem($product, $quantity);
        return $item;
    }

    /**
     * Remove product from cart
     *
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        //TODO Implement method
    }

    /**
     * This returns total number of products added in cart
     *
     * @return int
     */
    public function getTotalQuantity(): int
    {
        //TODO Implement method
    }

    /**
     * This returns total price of products added in cart
     *
     * @return float
     */
    public function getTotalSum(): float
    {
        //TODO Implement method
    }
}
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
    public function addProduct(Product $product, int $quantity): CartItem
    {
        $items = $this->get_items();
        for($i = 0; count($items); $i++) {
            if($items[$i]->get_product()->get_id() === $product->get_id()) {
                $item = $items[$i];
                $item->set_quantity($quantity);
                $items[$i] = $item;
                return $item;
            }
        }  
        $item = new CartItem($product, $quantity);
        array_push($this->items, $item);
        return $item;
    }

    public function removeProduct(Product $product)
    {
        $items = $this->get_items();
        for($i = 0; count($items); $i++) {
            if($items[$i]->get_product()->get_id() === $product->get_id()) {
                $this->set_items(array_slice($this->items, 0, $i) 
                + array_slice($this->items, $i + 1));
            }
        }  
    }

    public function getTotalQuantity(): int
    {
        $result = 0;
        $items = $this->get_items();
        for($i = 0; count($items); $i++) {
            $result += $items[$i]->get_quantity();
        }
        return $result;
    }


    public function getTotalSum(): float
    {
        $result = 0.0;
        $items = $this->get_items();
        for($i = 0; count($items); $i++) {
            $result += $items[$i]->get_quantity() * $items[$i]->get_product()->get_price();
        }
        return $result;
    }
}
<?php
// link of the project video : https://youtu.be/1Ip7_hdSqzY?list=PLXFS5tZPxtomMfQskzgXmfLd3GbX81oX0
// link of my answer: https://github.com/Yossab55/PHP_OOP_ShopingCart
//* good luck with you ❤️
require_once "classes/Cart.php";
require_once "classes/CartItem.php";
require_once "classes/Product.php";
$product1 = new Product(1, "iPhone 11", 2500, 10);
$product2 = new Product(2, "M2 SSD", 400, 10);
$product3 = new Product(3, "Samsung Galaxy S20", 3200, 10);
$cart = new Cart();
$cartItem1 = $cart->addProduct($product1, 1);
$cartItem2 = $product2->addToCart($cart, 1);
echo "Number of items in cart: ". PHP_EOL;
echo $cart->getTotalQuantity(). PHP_EOL; // This must print 2
echo "Total price of items in cart: ". PHP_EOL;
echo $cart->getTotalSum(). PHP_EOL; // This must print 2900

$cartItem2->increaseQuantity();
$cartItem2->increaseQuantity();
echo "Number of items in cart: ". PHP_EOL;
echo $cart->getTotalQuantity(). PHP_EOL; // This must print 4

echo "Total price of items in cart: ". PHP_EOL;
echo $cart->getTotalSum(). PHP_EOL; // This must print 3700

$cart->removeProduct($product1);

echo "Number of items in cart: ". PHP_EOL;
echo $cart->getTotalQuantity(). PHP_EOL; // This must print 3

echo "Total price of items in cart: ". PHP_EOL;
echo $cart->getTotalSum(). PHP_EOL; // This must print 1200

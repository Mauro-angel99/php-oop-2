<?php

include_once __DIR__ . '/models/product/Food.php';
include_once __DIR__ . '/models/product/Game.php';
include_once __DIR__ . '/models/product/Kennel.php';
include_once __DIR__ . '/models/shopping/Cart.php';





$food1 = new Food('Crocchette senza cereali', 37, 'Briantos','anatra e patate', 12);
var_dump($food1);

$game1 = new Game('frisbee', 15, 'Eurosisck','blu');
var_dump($game1);

$kennel1 = new Kennel('cuccia', 82, 'Joyelf', 90, 70, 20);
var_dump($kennel1);

$cart = new Cart();

$cart->addProduct($food1);
$cart->addProduct($game1);
var_dump($cart);

$cart->removeProduct($food1);
var_dump($cart);
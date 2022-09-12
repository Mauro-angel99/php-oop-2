<?php

include_once __DIR__ . '/models/food.php';
include_once __DIR__ . '/models/game.php';
include_once __DIR__ . '/models/cage.php';




$food1 = new food('Crocchette senza cereali', 37, 'Briantos','anatra e patate', 12);
var_dump($food1);

$game1 = new game('frisbee', 15, 'Eurosisck','blu');
var_dump($game1);

$cage1 = new cage('cuccia', 82, 'Joyelf', 90, 70, 20);
var_dump($cage1);
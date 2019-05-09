<?php

$name   = "Charoon Poolkaew";
$age    = 38;
$weight = 58;

$nomal_price = "299";
$sale_price  = 299.00;

echo "<pre>";
var_dump($name, $age, $weight);

var_dump($nomal_price == $sale_price);

var_dump($nomal_price != $sale_price);
var_dump($nomal_price === $sale_price);
echo "</pre>";

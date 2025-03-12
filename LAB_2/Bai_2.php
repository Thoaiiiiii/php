<?php 
    $products = array("Laptop" => 1500,
                      "Phone" => 800,
                      "Tablet" => 1200,);
    $maxPrice = max($products);
    $nameProduct = array_search($maxPrice, $products);
    echo "The most expensive product is " . $nameProduct . " with price: " . $maxPrice;
?>
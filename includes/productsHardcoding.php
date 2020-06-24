<?php
    include 'product.php';
    // Hardcoding the products which are to be added to the cart

    $shoes = new Product();
    $shoes->set_name('Shoes');
    $shoes->set_weightFactor(0.7);
    $shoes->set_price(60);
    $shoes->set_id(1);

    $jacket = new Product();
    $jacket->set_name('Jacket');
    $jacket->set_weightFactor(0.6);
    $jacket->set_price(50);
    $jacket->set_id(2);

    $hat = new Product();
    $hat->set_name('Hat');
    $hat->set_weightFactor(0.4);
    $hat->set_price(15);
    $hat->set_id(3);

    $trousers = new Product();
    $trousers->set_name('Trousers');
    $trousers->set_weightFactor(0.5);
    $trousers->set_price(35);
    $trousers->set_id(4);

    $tshirt = new Product();
    $tshirt->set_name('T-shirt');
    $tshirt->set_weightFactor(0.3);
    $tshirt->set_price(25);
    $tshirt->set_id(5);

    $socks = new Product();
    $socks->set_name('Socks');
    $socks->set_weightFactor(0.1);
    $socks->set_price(8);
    $socks->set_id(6);

    $watch = new Product();
    $watch->set_name('Watch');
    $watch->set_weightFactor(0.2);
    $watch->set_price(230);
    $watch->set_id(7);

    $necklace = new Product();
    $necklace->set_name('Necklace');
    $necklace->set_weightFactor(0.2);
    $necklace->set_price(98);
    $necklace->set_id(8);

    $products = array($shoes, $jacket,$hat,$trousers,$tshirt,$socks,$watch,$necklace);
?>
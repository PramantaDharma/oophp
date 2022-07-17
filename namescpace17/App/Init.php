<?php

// require_once 'Product/Product.php';
// require_once 'Product/User.php';
// require_once 'Product/CetakInfoProduct.php';
// require_once 'Product/InfoProduct.php';
// require_once 'Product/Android.php';
// require_once 'Product/Desktop.php';

// require_once 'Service/User.php';

spl_autoload_register(function( $class ){
    // App\Product\User = ["App", "Product", "User"]
    // Game = ["Game"]
    $class = explode("\\", $class );
    $class = end($class);
    require_once __DIR__ . "/Product/" . $class . ".php";
});

spl_autoload_register(function( $class ){
    $class = explode("\\", $class );
    $class = end($class);
    require_once __DIR__ . "/Service/" . $class . ".php";
});
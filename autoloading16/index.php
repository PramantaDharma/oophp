<?php

require_once "App/Init.php";

$acer = new Desktop( "Nitro", "Acer", 1900000000, "Microsoft Windows 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus optio minus reprehenderit maiores consectetur ex corporis deserunt, tenetur, ea dicta consequatur laudantium facilis fuga." );
$samsung = new Android( "Galaxy S22", "Samsung", 5556 , "Android 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!" );

$product = new CetakInfoProduct();
$product->addProduct( $acer );
$product->addProduct( $samsung );
echo $product->CetakList();

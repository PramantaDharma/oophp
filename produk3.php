<?php

class Produk {
    public $seri = "seri",
           $merek = "merek",
           $harga = "0",
           $spesifikasi = "spesifikasi"
           ;

    public function getLabel() {
        return "$this->seri, $this->merek";
    }
}

// $produk1 = new Produk();
// $produk1->merek = "Hp";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2-> tahunRilis = 2022;
// var_dump($produk2);

$produk3 = new Produk();
$produk3->seri = "Nitro";
$produk3->merek = "Acer";
$produk3->harga = 1900000000;
$produk3->spesifikasi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus optio minus reprehenderit maiores consectetur ex corporis deserunt, tenetur, ea dicta consequatur laudantium facilis fuga.";

$produk4 = new Produk();
$produk4->seri = "Galaxy S22";
$produk4->merek = "Samsung";
$produk4->harga = 2100000000;
$produk4->spesifikasi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!";

echo $produk3->getLabel();
echo "<br>";
echo $produk4->getLabel();
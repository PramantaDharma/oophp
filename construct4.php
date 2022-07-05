<?php

class Produk {
    public $seri = "seri",
           $merek = "merek",
           $harga = "0",
           $spesifikasi = "spesifikasi"
           ;

    public function __construct( $seri = "seri", $merek = "merek", $harga = "harga", $spesifikasi = "spesifikasi")
    {
        $this->seri = $seri;
        $this->merek = $merek;
        $this->harga = $harga;
        $this->spesifikasi = $spesifikasi;
    }

    public function getLabel() {
        return"
        $this->seri, 
        $this->merek, 
        $this->harga,
        $this->spesifikasi
        ";
    }
}

$produk1 = new Produk("Nitro", "Acer", 1900000000, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus optio minus reprehenderit maiores consectetur ex corporis deserunt, tenetur, ea dicta consequatur laudantium facilis fuga."  );
$produk2 = new Produk("Galaxy S22", "Samsung", 2100000000, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!");
$produk3 = new Produk("8i");

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();
echo "<br>";
var_dump( $produk3->getLabel() );
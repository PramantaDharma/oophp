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
        $this->seri 
        $this->merek
        ";
    }
}

class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->getLabel()} (Rp. {$produk->harga}) | {$produk->spesifikasi}";
        return $str;
    }
}

$produk1 = new Produk("Nitro", "Acer", 1900000000, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus optio minus reprehenderit maiores consectetur ex corporis deserunt, tenetur, ea dicta consequatur laudantium facilis fuga."  );
$produk2 = new Produk("Galaxy S22", "Samsung", 2100000000, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!");

echo $produk1->getLabel();
echo "<br>";
echo $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
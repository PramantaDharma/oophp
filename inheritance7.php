<?php

class Produk {
    public $seri,
           $merek,
           $harga,
           $spesifikasi,
           $android,
           $desktop
           ;

    public function __construct( $seri = "seri", $merek = "merek", $harga = "harga",  $android = null, $desktop = null, $spesifikasi = "spesifikasi" )
    {
        $this->seri = $seri;
        $this->merek = $merek;
        $this->harga = $harga;
        $this->spesifikasi = $spesifikasi;
        $this->android = $android;
        $this->desktop = $desktop;
    }

    public function getLabel() {
        return"
        $this->seri
        $this->merek
        ";
    }

    public function CetakInfoProduk() {
        // Seri Merek (Rp. Harga) - Versi OS | Spesifikasi.
        $str = "{$this->getLabel()} (Rp. {$this->harga}) | Spesifikasi : {$this->spesifikasi} ";
        return $str;
    }
}

class Android extends Produk {
    public function CetakInfoProduk()
    {
        $str = " Android : {$this->getLabel()} (Rp. {$this->harga}) | {$this->spesifikasi} - {$this->android}";
        return $str;
    }
}

class Desktop extends Produk{
    public function CetakInfoProduk()
    {
        $str = " Desktop : {$this->getLabel()} (Rp. {$this->harga}) | {$this->spesifikasi} - {$this->desktop} ";
        return $str;   
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->getLabel()} (Rp. {$produk->harga}) | {$produk->spesifikasi}";
        return $str;
    }
}

// Seri Merek (Rp. Harga) - Versi OS | Spesifikasi.
$acer = new Desktop( "Nitro", "Acer", 1900000000, null, "Microsoft Windows 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus optio minus reprehenderit maiores consectetur ex corporis deserunt, tenetur, ea dicta consequatur laudantium facilis fuga." );
$samsung = new Android( "Galaxy S22", "Samsung", 2100000000, "Android 11", null, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!" );

echo $acer->CetakInfoProduk();
echo "<br>";
echo $samsung->CetakInfoProduk();

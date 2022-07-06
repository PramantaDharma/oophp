<?php

class Produk {
    public $seri,
           $merek,
           $harga,
           $spesifikasi
           ;

    public function __construct( $seri = "seri", $merek = "merek", $harga = "harga", $spesifikasi = "spesifikasi" )
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

    public function CetakInfoProduk() {
        // Seri Merek (Rp. Harga) - Versi OS | Spesifikasi.
        $str = "{$this->getLabel()} (Rp. $this->harga) | Spesifikasi : $this->spesifikasi ";
        return $str;
    }
}

class Android extends Produk {
    public $android;

    public function __construct( $seri = "seri", $merek = "merek", $harga = "harga", $android = "android", $spesifikasi = "spesifikasi")
    {
        parent::__construct( $seri, $merek, $harga, $spesifikasi );
        $this->android = $android;
    }

    public function CetakInfoProduk()
    {
        $str = " Android : ". parent::CetakInfoProduk() ." - $this->android";
        return $str;
    }
}

class Desktop extends Produk{
    public $desktop;

    public function __construct( $seri = "seri", $merek = "merek", $harga = "harga", $desktop = "desktop", $spesifikasi = "spesifikasi")
    {
        parent::__construct( $seri, $merek, $harga, $spesifikasi);
        $this->desktop = $desktop;

    }

    public function CetakInfoProduk()
    {
        $str = " Desktop : ". parent::CetakInfoProduk() ." - $this->desktop ";
        return $str;   
    }
}


class CetakInfoProduk {
    public function cetak( Produk $produk ) {
        $str = "{$produk->getLabel()} (Rp. $produk->harga) | $produk->spesifikasi";
        return $str;
    }
}

// Seri Merek (Rp. Harga) - Versi OS | Spesifikasi.
$acer = new Desktop( "Nitro", "Acer", 1900000000, "Microsoft Windows 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus optio minus reprehenderit maiores consectetur ex corporis deserunt, tenetur, ea dicta consequatur laudantium facilis fuga." );
$samsung = new Android( "Galaxy S22", "Samsung", 2100000000, "Android 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!" );

echo $acer->CetakInfoProduk();
echo "<br>";
echo $samsung->CetakInfoProduk();

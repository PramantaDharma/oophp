<?php

class Produk {
    public $seri,
           $merek,
           $spesifikasi;

    // private $diskon = 0;
    protected $diskon = 0;

    private $harga;

    public function __construct( $seri = "seri", $merek = "merek", $harga = "harga", $spesifikasi = "spesifikasi" )
    {
        $this->seri = $seri;
        $this->merek = $merek;
        $this->harga = $harga;
        $this->spesifikasi = $spesifikasi;
    }

    // public function setDiskon ( $diskon ) {
    //     $this->diskon = $diskon;
    // }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
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

    public function setDiskon ( $diskon ) {
        $this->diskon = $diskon ;
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
$samsung = new Android( "Galaxy S22", "Samsung", 5556   , "Android 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!" );

echo $acer->CetakInfoProduk();
echo "<br>";
echo $samsung->CetakInfoProduk();
echo "<hr>";

$samsung->setDiskon(50);
echo $samsung->getHarga();
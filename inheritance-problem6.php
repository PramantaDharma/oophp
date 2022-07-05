<?php

class Produk {
    public $seri,
           $merek,
           $harga,
           $spesifikasi,
           $OS,
           $android,
           $desktop
           ;

    public function __construct( $OS, $seri = "seri", $merek = "merek", $harga = "harga",  $android = null, $desktop = null, $spesifikasi = "spesifikasi" )
    {
        $this->seri = $seri;
        $this->merek = $merek;
        $this->harga = $harga;
        $this->spesifikasi = $spesifikasi;
        $this->android = $android;
        $this->desktop = $desktop;
        $this->OS = $OS;
    }

    public function getLabel() {
        return"
        $this->seri
        $this->merek
        ";
    }

    public function CetakInfoLengkap() {
        // Seri Merek (Rp. Harga) - Versi OS | Spesifikasi.
        $str = "{$this->getLabel()} (Rp. {$this->harga})";
        if ( $this->OS == "android") {
            $str .= " -- {$this->android} Version.";
        }elseif ( $this->OS == "desktop" ) {
            $str .= " -- {$this->desktop} OS.";
        }
        $str .= " | Spesifikasi : {$this->spesifikasi} ";
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
$produk1 = new Produk( "desktop", "Nitro", "Acer", 1900000000, null, "Microsoft Windows 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus optio minus reprehenderit maiores consectetur ex corporis deserunt, tenetur, ea dicta consequatur laudantium facilis fuga." );
$produk2 = new Produk( "android", "Galaxy S22", "Samsung", 2100000000, "Android 11", null, "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!" );

echo $produk1->CetakInfoLengkap();
echo "<br>";
echo $produk2->CetakInfoLengkap();

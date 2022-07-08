<?php

class Produk {
    private $seri,
           $merek,
           $spesifikasi,
           $harga,
           $diskon = 0;
        


    public function __construct( $seri = "seri", $merek = "merek", $harga = "harga", $spesifikasi = "spesifikasi" )
    {
        $this->seri = $seri;
        $this->merek = $merek;
        $this->harga = $harga;
        $this->spesifikasi = $spesifikasi;
    }

    public function setSeri( $seri ) {
        // if ( !is_string($seri) ) {
        //     throw new Exception("Tolong jangan memasukkan selain string");
        // }

        $this->seri = $seri;
    }
    
    public function getSeri(){
        return $this->seri;
    }

    public function setMerek( $merek ){
        $this->merek = $merek;
    }

    public function getMerek(){
        return $this->merek;
    }

    public function setSpesifikasi( $spek ){
        $this->spesifikasi = $spek;
    }

    public function getSpesifikasi(){
        return $this->spesifikasi;
    }

    public function setHarga( $harga ){
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function setDiskon ( $diskon ){
        $this->diskon = $diskon;
    }

    public function getDiskon (){
        return $this->diskon;
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
$samsung = new Android( "Galaxy S22", "Samsung", 5556   , "Android 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!" );

echo $acer->CetakInfoProduk();
echo "<br>";
echo $samsung->CetakInfoProduk();
echo "<hr>";

$samsung->setDiskon(50);
echo $samsung->getHarga();
echo "<hr>";

$asus = new Produk("Zenfone");
$asus->setSeri("Asus");
echo $asus->getSeri();
echo "<hr>";

$acer->setSpesifikasi(true);
echo $acer->getSpesifikasi();

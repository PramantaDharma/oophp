<?php

interface InfoProduct {
    public function GetInfoProduct();
}

abstract class Product {
    protected $seri,
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

    abstract public function getInfo();

}

class Android extends Product implements InfoProduct{
    public $android;    

    public function __construct( $seri = "seri", $merek = "merek", $harga = "harga", $android = "android", $spesifikasi = "spesifikasi")
    {
        parent::__construct( $seri, $merek, $harga, $spesifikasi );
        $this->android = $android;
    }

    public function getInfo() {
        // Seri Merek (Rp. Harga) - Versi OS | Spesifikasi.
        $str = "{$this->getLabel()} (Rp. $this->harga) | Spesifikasi : $this->spesifikasi ";
        return $str;
    }

    public function GetInfoProduct()
    {
        $str = " Android : ". $this->getInfo() ."- $this->android";
        return $str;
    }
}

class Desktop extends Product implements InfoProduct{
    public $desktop;

    public function __construct( $seri = "seri", $merek = "merek", $harga = "harga", $desktop = "desktop", $spesifikasi = "spesifikasi")
    {
        parent::__construct( $seri, $merek, $harga, $spesifikasi);
        $this->desktop = $desktop;

    }

    public function getInfo() {
        // Seri Merek (Rp. Harga) - Versi OS | Spesifikasi.
        $str = "{$this->getLabel()} (Rp. $this->harga) | Spesifikasi : $this->spesifikasi ";
        return $str;
    }

    public function GetInfoProduct()
    {
        $str = " Desktop : ". $this->getInfo() ." - $this->desktop ";
        return $str;
    }
}


class CetakInfoProduct {
    public $listProduct = [];

    public function addProduct( Product $product ){
        $this->listProduct[] = $product;
    }

    public function CetakList() {
        $str = "List Of Product : <br>";

        foreach( $this->listProduct as $prod ){
            $str .= " - {$prod->GetInfoProduct()} <br>";
        }
        return $str;
    }
}

// Seri Merek (Rp. Harga) - Versi OS | Spesifikasi.
$acer = new Desktop( "Nitro", "Acer", 1900000000, "Microsoft Windows 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia delectus optio minus reprehenderit maiores consectetur ex corporis deserunt, tenetur, ea dicta consequatur laudantium facilis fuga." );
$samsung = new Android( "Galaxy S22", "Samsung", 5556   , "Android 11", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia tempore dolor delectus impedit minima nesciunt consectetur aperiam similique iure perferendis!" );

$product = new CetakInfoProduct();
$product->addProduct( $acer );
$product->addProduct( $samsung );
echo $product->CetakList();

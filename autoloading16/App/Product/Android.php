<?php

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
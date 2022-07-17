<?php

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
<?php

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
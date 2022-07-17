<?php 

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
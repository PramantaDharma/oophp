<?php

// define("NAME", "Barracuda"); 
// echo NAME;
// echo "<br>";
// // ga bisa dimasukan ke kelas

// const USER = "Barr";
// echo USER;
// echo "<br>";
// // bisa dimasukkan ke kelas

// class Pertama {
//     const KEY = "Value";
// }

// echo Pertama::KEY;

// echo __FILE__;

// function Hello() {
//     return __FUNCTION__;
// }
// echo Hello();

class Hai{
    public $kata = __CLASS__;
}
$Word = new Hai();
echo $Word->kata;

?>
<?php

// class StaticContoh{
//     public static $number = 1;

//     public static function hello(){
//         return "Hello " . self::$number++ . " time. <br>";
//     }
// }

// echo StaticContoh::$number;
// echo "<br>";
// echo StaticContoh::hello();
// echo StaticContoh::hello();
// echo StaticContoh::hello();


class NilaiTetap{
    public static $number = 1;

    public function hai(){
        return "Hai " . self::$number++ . " time. <br>";
    }
}

$num = new NilaiTetap;
echo $num->hai();
echo $num->hai();
echo $num->hai();
echo $num->hai();

echo "<hr>";
echo $num->hai();
echo $num->hai();
echo $num->hai();
echo $num->hai();

?>
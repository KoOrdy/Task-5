<?php

class Math {
    public static function add($x, $y) {
        return $x + $y;
    }

    public static function subtract($x, $y) {
        return $x - $y;
    }

    public static function multiply($x, $y) {
        return $x * $y;
    }
}

$res1 = Math::add(5, 3);         
$res2 = Math::subtract(10, 4);   
$res3 = Math::multiply(7, 6);    

echo "Addition result: " . $res1 ;
echo "<hr>";
echo "Subtraction result: " . $res2 ;
echo "<hr>";
echo "Multiplication result: " . $res3 ;



<?php
function tambah($x,$y){
    return $x + $y;
}

function kurang($x,$y){
    return $x - $y;
}

function bagi($x,$y){
    return $x / $y;
}

function kali($x,$y){
    return $x * $y;
}

function mod($x,$y){
    return $x %$y;
}

$a=10;
$b=5;
echo "PENJUMLAHAN<br>";
echo "Operator: +<br>";
echo "Hasil : ", tambah($a,$b),"<br><br>";

echo "PENGURANGAN<br>";
echo "Operator: -<br>";
echo "Hasil : ", kurang($a,$b),"<br><br>";

echo "PERKALIAN<br>";
echo "Operator: *<br>";
echo "Hasil : ", kali($a,$b),"<br><br>";

echo "PEMBAGIAN<br>";
echo "Operator: /<br>";
echo "Hasil : ", bagi($a,$b),"<br><br>";

echo "MODULUS<br>";
echo "Operator: %<br>";
echo "Hasil : ", mod($a,$b),"<br";
?>
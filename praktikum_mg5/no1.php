<?php
function kalku($x,$y,$operator){
    if($operator=="+") return $x + $y;
    else if ($operator=="-") return $x - $y;
    else if ($operator=="/") return $x / $y;
    else if ($operator=="*") return $x * $y;
    else if($operator=="%") return $x%$y;
}

$a=10;
$b=3;
echo "PENJUMLAHAN<br>";
echo "Operator: +<br>";
echo "Hasil : ", kalku($a,$b,"+"),"<br><br>";

echo "PENGURANGAN<br>";
echo "Operator: -<br>";
echo "Hasil : ", kalku($a,$b,"-"),"<br><br>";

echo "PERKALIAN<br>";
echo "Operator: *<br>";
echo "Hasil : ", kalku($a,$b,"*"),"<br><br>";

echo "PEMBAGIAN<br>";
echo "Operator: /<br>";
echo "Hasil : ", kalku($a,$b,"/"),"<br><br>";

echo "MODULUS<br>";
echo "Operator: %<br>";
echo "Hasil : ", kalku($a,$b,"%"),"<br";
?>
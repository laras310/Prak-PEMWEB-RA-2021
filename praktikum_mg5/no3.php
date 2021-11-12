<?php
function prime($a, $b){
for($i=$a+1; $i<$b;$i++){
    $n=0;
    for($j=2; $j<=$i/2;$j++){
        if($i%$j==0){
            $n=1;
            break;
        }
    }
    if($n==0 && $i!=1){
        echo("$i ");
    }
}
}

echo("daftar nilai prima: <br>");
prime(0,50);
?>
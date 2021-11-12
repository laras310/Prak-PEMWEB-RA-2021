<?php
function urut($arr){
    $pjg = count($arr);
    for($i=0; $i<$pjg;$i++){
        for($j=$i+1; $j<$pjg; $j++){
            if($arr[$i] > $arr[$j]){
                $temp     = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }
    return $arr;
}

$array=Array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "kifuat");

echo ("URUTAN: <br>");
$urut=urut($array);
foreach ($urut as $value){
    echo "$value <br>";
} 

?>
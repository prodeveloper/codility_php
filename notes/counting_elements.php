<?php

$A=[0,0,4,2,4,5];
$m=6;
$res=counting($A,$m);
var_dump($res);print "\n";
/**
 * @param array $A values
 * @param $m maximum size of counting array
 */
function counting(array $A,$m){
    $n=count($A);
    $c_array=array_fill(0,$m+1,0);
    for($i=0;$i<$n;$i++){
        $c_array[$A[$i]]+=1;
    }
    return $c_array;
}


function swapping($A,$B,$m){
    $sum_a=array_sum($A);
    $sum_b=array_sum($B);
    $n=count($A);
    $d=$sum_a-$sum_b;
    if($d%2!==0){
        return false;
    }
    $count=counting($A,$m);
    for($i=0;$i<$n;$i++){
        if(($B[$i]-$d)>= 0 && ($B[$i]-$d) <=$m && count($B[$i]-$d)>0){
            return true;
        }
    }
    return false;
}
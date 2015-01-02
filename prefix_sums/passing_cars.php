<?php

//results https://codility.com/demo/results/demoXB79KE-MY9/
$A=[0, 1, 0, 1, 1];

$res=solution($A);

print $res ."\n";

function solution($A) {
    $combinations=0;
    if(count($A)==1){
        return 0;
    }
    $multiplicative=0;
    for($i=0;$i<count($A);$i++){
        if($combinations>1000000000){
            return -1;
        }
        if($A[$i]==0){
            $multiplicative++;
        }
        if($A[$i]==1){
            $combinations+=1*$multiplicative;
        }

    }
    return $combinations;
}

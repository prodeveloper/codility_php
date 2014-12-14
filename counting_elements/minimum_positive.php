<?php
$A =[-1];
$res = solution($A);
var_dump($res);
print "\n";
function solution($A)
{
    $min=1;
    sort($A);

    for($i=0;$i<count($A);$i++){
        if($A[$i]==$min){
           $min++;
        }
    }
    return $min;
}
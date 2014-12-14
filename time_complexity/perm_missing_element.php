<?php
$A = [2, 3, 1, 5];
$res = solution($A);
var_dump($res);
print "\n";
function solution($A)
{
    $n=count($A)+1;
    $total=array_sum($A);
    $expected=$n*($n+1)*0.5;
    return intval($expected-$total);
}

<?php
$X = 85;
$Y = 85;
$D = 30;
$res = solution($X, $Y, $D);
var_dump($res);
print("\n");
function solution($X, $Y, $D)
{
    $jumps = 0;
    $difference=$Y-$X;
    $jumps=$difference/$D;
    $int_jumps=intval(ceil($jumps));
    return $int_jumps;
}
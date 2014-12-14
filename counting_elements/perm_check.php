<?php

$A = [4, 1, 3, 2];
$res = solution($A);
var_dump($res);
print "\n";
function solution($A)
{
    $n = count($A);
    $counting = array();
    $max = null;
    for ($i = 0; $i < $n; $i++) {
        $counting[$A[$i]] = $A[$i] + 1;
        if ($A[$i] > $max || $max === null) {
            $max = $A[$i];
        }
    }
    //Comparison tells us that 
    return (count($counting) == $max) && ($max == $n) ? 1 : 0;
}
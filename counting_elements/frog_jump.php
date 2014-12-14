<?php
$X = 5;
$n = 1000000;
$A = [1, 3, 1, 4, 2, 3, 5, 4];
//$A=[1];

$res = solution($X, $A);
var_dump($res);
print "\n";
function solution($X, $A)
{
    $n = count($A);
    $counting = array();
    $max = null;
    for ($i = 0; $i < $n; $i++) {

        if ($A[$i] <= $X) {
            $counting[$A[$i]] = 1;
        }
        if (count($counting) == $X) {
            return $i;
        }

    }
    return -1;
}


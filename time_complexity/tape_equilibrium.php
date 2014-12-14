<?php


$A = [3, -1];

$res = solution($A);
print $res;
function solution($A)
{
    $total = array_sum($A);
    $sum_from_up = $total;
    $sum_from_down = 0;
    $min = null;
    //Dont loop to last element this is to take care of edge cases where only two elements
    for ($i = 0; $i < count($A) - 1; $i++) {
        $sum_from_up -= $A[$i];
        $sum_from_down += $A[$i];
        $abs = abs($sum_from_down - $sum_from_up);
        //Save last minimum
        $min = $abs < $min || $min == null ? $abs : $min;
        //There can be no less than a zero minimum jump ship now
        if($min==0){
            return 0;
        }

    }
    return $min;
}
<?php
//results https://codility.com/demo/results/demoHSXHQ3-VP2/
$A = 0;
$B = 0;
$K = 1;

$res = solution($A, $B, $K);

print $res . "\n";

function solution($A, $B, $K)
{
    if ($K == 0) {
        return -1;
    }

    $possible_steps_max = $B / $K;
    $possible_steps_min = $A > 0 ? ($A - 1) / $K : 0;
    if ($A == 0) {
        $possible_steps_max++;
    }

    return intval($possible_steps_max) - intval($possible_steps_min);
}

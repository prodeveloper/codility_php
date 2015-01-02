<?php
//results https://codility.com/demo/results/demoU9DHNY-JMD/
$N = 5;
$A = array(3, 4, 4, 6, 1, 4, 4);
$res = solution($N, $A);
print json_encode($res) . "\n";

function solution($N, $A)
{
    $counters = array_fill(0, $N, 0);
    $currentMax = 0;
    $currentMin = 0;
    for ($i = 0; $i < count($A); $i++) {
        if ($A[$i] == $N + 1) {
            $currentMin = $currentMax;
        } else {
            if ($counters[$A[$i] - 1] < $currentMin) {
                $counters[$A[$i] - 1] = $currentMin;
            }
            $counters[$A[$i] - 1]++;

            if ($currentMax < $counters[$A[$i] - 1]) {
                $currentMax = $counters[$A[$i] - 1];
            }
        }

    }
    for ($j = 0; $j < $N; $j++) {
        $counters[$j] = $counters[$j] < $currentMin ? $currentMin : $counters[$j];
    }

    return $counters;
}

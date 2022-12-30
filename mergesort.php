<?php

function mergesort(array $a): array
{
    if (count($a) === 1) {
        return $a;
    } elseif (count($a) === 2) {
        if ($a[0] > $a[1]) {
            return [$a[1], $a[0]];
        }

        return $a;
    }

    $p = intval(count($a) / 2);
    $m1 = mergesort(array_slice($a, 0, $p));
    $m2 = mergesort(array_slice($a, $p));
    $ret = [];

    while (1) {
        if (count($m1) > 0 && count($m2) > 0) {
            if ($m1[0] <= $m2[0]) {
                $ret[] = $m1[0];
                $m1 = array_slice($m1, 1);
            } else {
                $ret[] = $m2[0];
                $m2 = array_slice($m2, 1);
            }
        } elseif (count($m1) > 0) {
            $ret = array_merge($ret, $m1);
            $m1 = [];
        } elseif (count($m2) > 0) {
            $ret = array_merge($ret, $m2);
            $m2 = [];
        } else {
            break;
        }
    }

    return $ret;
}

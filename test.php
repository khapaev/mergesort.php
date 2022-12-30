<?php

declare(strict_types=1);

include_once __DIR__ . "/mergesort.php";

$a = [5, 9, 1, 3, 4, 6, 6, 3, 2];
$r = mergesort($a);

echo sprintf("%s\n", json_encode($r));

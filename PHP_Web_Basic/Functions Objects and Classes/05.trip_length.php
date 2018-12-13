<?php

[$x1,$y1,$x2,$y2,$x3,$y3] = array_map('floatval', explode(', ', readline()));

$dist12 = sqrt(pow(($x2 - $x1), 2) + pow(($y2 - $y1), 2));
$dist23 = sqrt(pow(($x3 - $x2), 2) + pow(($y3 - $y2), 2));
$dist13 = sqrt(pow(($x3 - $x1), 2) + pow(($y3 - $y1), 2));

if (($dist12 <= $dist13) && ($dist13 >= $dist23)) {
    echo '1->2->3: ' . ($dist12 + $dist23);
} else if ($dist12 <= $dist23 && $dist13 < $dist23) {
    echo '2->1->3: ' . ($dist13 + $dist12);
} else {
    echo '1->3->2: ' . ($dist23 + $dist13);
}

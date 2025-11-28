<?php
if (!isset($_GET['x']) || !isset($_GET['y'])) {
    echo "NaN";
    exit;
}

$x = $_GET['x'];
$y = $_GET['y'];

if (!preg_match('/^\d+$/', $x) || !preg_match('/^\d+$/', $y)) {
    echo "NaN";
    exit;
}

if ($x === "0" || $y === "0") {
    echo "0";
    exit;
}

function gcd($a, $b) {
    while (bccomp($b, '0') !== 0) {
        $tmp = $b;
        $b = bcmod($a, $b);
        $a = $tmp;
    }
    return $a;
}

$g = gcd($x, $y);
$lcm = bcmul(bcdiv($x, $g), $y);

// Output only digits, no newline
echo $lcm;

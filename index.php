<?php

header("Content-Type: text/plain");
ob_clean(); // remove any accidental whitespace

// Validate input
if (!isset($_GET['x']) || !isset($_GET['y'])) {
    echo "NaN";
    exit;
}

$x = $_GET['x'];
$y = $_GET['y'];

// Check non-negative integers
if (!ctype_digit($x) || !ctype_digit($y)) {
    echo "NaN";
    exit;
}

if ($x === "0" || $y === "0") {
    echo "0";
    exit;
}

// Safe bcmod for very large integers
function bcmod_safe($x, $y)
{
    $mod = "0";
    $y_int = intval($y);

    for ($i = 0; $i < strlen($x); $i++) {
        $mod = ( (int)$mod * 10 + (int)$x[$i] ) % $y_int;
    }

    return (string)$mod;
}

// Greatest common divisor
function gcd($a, $b)
{
    while ($b !== "0") {
        $temp = bcmod_safe($a, $b);
        $a = $b;
        $b = $temp;
    }
    return $a;
}

// LCM = (x * y) / gcd(x, y)
$g = gcd($x, $y);
$lcm = bcdiv(bcmul($x, $y), $g, 0);

echo $lcm;
exit;

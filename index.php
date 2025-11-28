// <?php

// // Return NaN if x or y is missing
// if (!isset($_GET['x']) || !isset($_GET['y'])) {
//     echo "NaN";
//     exit;
// }

// $x = $_GET['x'];
// $y = $_GET['y'];

// // Validate natural numbers (non-negative integers)
// if (!preg_match('/^\d+$/', $x) || !preg_match('/^\d+$/', $y)) {
//     echo "NaN";
//     exit;
// }

// // Use BCMath (handles unlimited big integers)
// function gcd($a, $b) {
//     while (bccomp($b, '0') !== 0) {
//         $tmp = $b;
//         $b = bcmod($a, $b);
//         $a = $tmp;
//     }
//     return $a;
// }

// $x = (string)$x;
// $y = (string)$y;

// $g = gcd($x, $y);

// // LCM = (x / gcd) * y
// $lcm = bcmul(bcdiv($x, $g), $y);

// echo $lcm;


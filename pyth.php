<?php

function pythag($a , $b)
{
    $sumOfSquares = $a * $a + $b * $b;
    $c = sqrt($sumOfSquares);

    return $c;
}

$a = 3;
$b = 4;

$solution = pythag($a, $b);

echo "The length of the hypotenuse is: " . $solution. "\n";
?>

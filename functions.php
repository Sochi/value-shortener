<?php

function decode($pattern, $string) {
    $length = strlen($string) - 1;
    $count = strlen($pattern);
    $number = 0;
    
    for ($i = $length; $i >= 0; --$i) {
        if (($position = strpos($pattern, $string[$i])) !== false) {
            $number += $position * pow($count, $length - $i);
        }
        else {
            return 0; // Invalid character
        }
    }
    
    return $number;
}

function encode($pattern, $number) {
    $count = strlen($pattern);
    $length = largestFactor($count, $result = $number);
    $product = null; // Empty definition
    
    for ($i = $length; $i >= 0; --$i) {
        $power = pow($count, $i);
        $index = floor($result / $power);
        $result -= $power * $index;
        $product .= $pattern[intval($index)];
    }
    
    return $product;
}

function largestFactor($of, $number) {
    $iteration = 1;
    $compare = $of;
    while ($compare < $number) {
        $compare *= $of;
        ++$iteration;
    }
    
    return $iteration - 1;
}




<?php

function decode($pattern, $str) {
    $length = strlen($str) - 1;
    $count = strlen($pattern);
    $num = 0;
    for($i=$length;$i>=0;$i--) {
        if(($pos = strpos($pattern,$str[$i])) !== false) {
            $num = $num + $pos * pow($count,$length-$i);
        }
        else {
            return 0;
        }
    }
    
    return $num;
}

function encode($pattern, $num) {
    $count = strlen($pattern);
    $h = largestFactor($count,($res = $num));
    $product = '';
    
    for($i=$h;$i>=0;$i--) {
        $pow = pow($count,$i);
        $div = floor($res/$pow);
        $res = $res - $pow * $div;
        $product .= $pattern[$div];
    }
    
    return $product;
}

function largestFactor($of, $num) {
    $iter = 1;
    $new = $of;
    while($new < $num) {
        $new = $new * $of;
        $iter++;
    }
    return $iter-1;
}




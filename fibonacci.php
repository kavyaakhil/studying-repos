<?php
function fib($n) {
    if($n<=2) return 1;
    $res = [0, 1];
    for($i=2; $i<=$n; $i++) {
        $res[$i] = $res[$i-1] + $res[$i-2];
    }
    return $res[$n];
}

echo fib(20);
?>

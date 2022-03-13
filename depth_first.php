<?php

// iterative way of solving problem
function depthFirst($arr, $start) {
    $stack = [$start];
    
    while(count($stack) > 0) {
        $current = array_pop($stack);
        echo $current;
        
        foreach ($arr[$current] as $neighbour) {
            array_push($stack, $neighbour);
        }
    }
}

// recursive way of solving problem
function depthFirstRecursive($arr, $start) {
    echo $start;
    foreach($arr[$start] as $neighbour) {
        depthFirstRecursive($arr, $neighbour);
    }
}

// breadth first iterative way
function breadthFirst($arr, $start) {
    $queue = [$start];
    
    while(count($queue) > 0) {
        $current = array_shift($queue);
        echo $current;
        
        foreach ($arr[$current] as $neighbour) {
            array_push($queue, $neighbour);
        }
    }
    
}

$graph = [
    'a' => ['b', 'c'],
    'b' => ['d'],
    'c' => ['e'],
    'd' => ['f'],
    'e' => [],
    'f' => [],
];

depthFirst($graph, 'a');
echo "<br>";
depthFirstRecursive($graph, 'a');
echo "<br>";
breadthFirst($graph, 'a');
?>

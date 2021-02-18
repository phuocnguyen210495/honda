<?php

use SebastianBergmann\CodeCoverage\Report\PHP;

require __DIR__ . '/vendor/autoload.php';

function distance(string $first, string $second, int $insertCost = 1, int $deleteCost = 1, int $replaceCost = 1)
{
    $cost = max(
        strlen($second) - strlen($first) * $deleteCost,
        strlen($first) - strlen($second) * $insertCost
    );

    $first = substr($first, 0, strlen($second));

    for ($i = 0; $i < strlen($first); $i++) {
        if ($first[$i] !== $second[$i]) {
            $cost += $replaceCost;
        }
    }

    return $cost;
}
$tests = [
    ['Some', 'Thing'],
    ['AAAAAAAAAaaaaa', 'aVVVVVVVVVVVVvvvv'],
    ['Silezljfs1&', 'zs'],
    ["aaaa", "aaaa"],
    ["ijl,wdsfw", "1111111111&&&"],
    ["sds;:,", "1dsssssssssss"],
    ["q", "sssssssssss"],
    ["a1111", "ééééééé"],
    ["ee", "ae"],
    ["qomejlfs yes d", "no no"],
    ["fkslmdkfd", "slmf"],
];

$bench = function () use ($tests) {    
    $results = [];
    
    foreach ($tests as $test) {
        $start = microtime(true);
    
        levenshtein($test[0], $test[1]);
    
        $end = microtime(true);
    
        $results[] = $end - $start;
    }

    return array_sum($results) / count($results);
};

$avgs = [];

for ($i=0; $i < 1000; $i++) { 
    $avgs[] = $bench();    
}

$_bench = function () use ($tests) {    
    $results = [];
    
    foreach ($tests as $test) {
        $start = microtime(true);
    
        distance($test[0], $test[1]);
    
        $end = microtime(true);
    
        $results[] = $end - $start;
    }

    return array_sum($results) / count($results);
};

$_avgs = [];

for ($i=0; $i < 1000; $i++) { 
    $_avgs[] = $_bench();    
}

echo 'Average: ' . array_sum($avgs) / count($avgs) . PHP_EOL;
echo 'Average (built-in) : ' . array_sum($_avgs) / count($_avgs) . PHP_EOL;
<?php

function countPairs(array $numbers, int $targetNumber):int
{
    $flags = [];
    $numberPairs = [];

    foreach ($numbers as $number) {
        $targetPair = $targetNumber - $number;
        
        if (isset($flags[$targetPair])) {
            $key = ($number > $targetPair) ? $targetPair.'_'.$number : $number.'_'.$targetPair;
            $numberPairs[$key] = true;
        }

        $flags[$number] = true;
    }
    
    return count($numberPairs);
}

echo 'Answer1: '.countPairs([1, 3, 2, 2, 3, 4], 5).PHP_EOL;
echo 'Answer2: '.countPairs([1, 1, 1, 1], 2).PHP_EOL;
echo 'Answer3: '.countPairs([1, 2, 3, 4, 5], 7).PHP_EOL;

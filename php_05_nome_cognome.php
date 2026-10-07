<?php
$numbers = [];

for ($i = 0; $i < 10; $i++) {
    $numbers[] = rand(1, 100);
}

$add = 0;
$even =  0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $add += $number;
        $even++;
        echo $number . " " . "\n";
    }
}

$mean = $add / $even;

echo "Media: " . (int)$mean;

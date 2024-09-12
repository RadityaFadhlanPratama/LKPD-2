<?php
// DEFINISIKAN DUA ARRAY
$bil1 = [80,77,65,89,55,12,90,86];
$bil2 = [77,99,55,81,45,90,91,98];

//satukan dua variabel 
$bilangan = array_merge($bil1,$bil2);

$bilanganunique = array_unique($bilangan);

sort($bilangan);

echo "hasil: " . implode("\n", $bilanganunique);



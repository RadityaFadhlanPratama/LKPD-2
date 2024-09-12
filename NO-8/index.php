<?php

// parameter pariadik karena dia bisa menampung banyak argumen
function createArray(...$jurusan){
    $arr = [];
    foreach ($jurusan as $value) {
        // mengubah ke ke kapital
        if (in_array(strtoupper($value), $arr) == false) {
            array_push($arr, strtoupper($value));
        }
    }
    return $arr;
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));
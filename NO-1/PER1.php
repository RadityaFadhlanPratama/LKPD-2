

<?php 

$teks = "SELAMAT ulang tahun yang  ke-17 !";

//MENCARI SEMUA SIMBOL
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches); 

if (count($matches[0]) > 0) {
    // MENGHILANGKAN DUPLIKASI SIMBOL
    $uniqueSymbols = array_unique($matches[0]);
    echo "Karakter yang terdapat pada kalimat : " . implode(',',$uniqueSymbols);
} else {
    echo "Tidak terdapat simbol pada kalimat";

}

?> 
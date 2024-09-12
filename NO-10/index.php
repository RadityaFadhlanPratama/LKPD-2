<?php 
function checkjawaban ($nama, ...$arrjawaban) {
    $jawaban = ["A","B","C","D"];
    $arrBenar =[];

    foreach($jawaban as $key => $value) {
        if ($arrjawaban[$key] == $value) {
            $arrBenar[$key] = 1;
        } else {
            $arrBenar[$key] = 0;
        }
    }

     // MENAMPILKAN HASIL 
        echo "Nama : $nama <br>";
        echo "Jumlah Jawaban benar : <b>" . count(array_keys($arrBenar, 1)) . "</b></br>";
        echo "Jumalah Jawaban salah : <b>" . count(array_keys($arrBenar, 0)) . "</b></br>";

    }
    checkjawaban("putri", "A","B","D","D");

?>
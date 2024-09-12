<?php 
$pembelanjaan = 130000 ;
$day = date ('l');
$diskon1 = 0.07;
$diskon2 = 0.05;
$totalbayar ; 

if ($pembelanjaan > 100000 && $day == "thursday") {
    $totalbayar = $pembelanjaan - ($pembelanjaan * ($diskon1 + $diskon2));
} else if ($pembelanjaan > 10000) {
    $totalbayar = $pembelanjaan - ($pembelanjaan * $diskon1 ) ;
} else if ($day == "Thursday") {
    $totalbayar = $pembelanjaan * $diskon2 ;
} else {
    $totalbayar = $pembelanjaan;
}


echo "hari ini hari" . $day;
echo "<br>";
echo "total belanja" . $pembelanjaan;
echo "<br>";
echo "total pembelanjaan ". number_format($totalbayar,0,'',',')

?>

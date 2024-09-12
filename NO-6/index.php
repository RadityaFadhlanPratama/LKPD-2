<?php 
echo "<p style='text-align: center; margin: 15px 0;'> MENGHITUNG TOTAL HARGA PEMBELIAN DARI DATA TERSEBUT " . "</p>";
echo "<hr>";
$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => 18000,
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => 5000,
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => 15000,
        'jumlah_beli' => 4,
    ],
];

// inisialisasi
$price = 0;

echo "Daftar belanjaan : </br>";
echo "<ol>";

// iterasi melalui setiap item dalam array $barang
foreach ($barang as $item) {
    // Menghitung harga subtotal untuk item 
    $subPrice = $item['harga_barang'] * $item['jumlah_beli'];

    // menampilkan nama barang, jumlah yang dibeli, harga subtotal dalam bentuk format
    echo "<li> " . $item['nama_barang'] . " (" . $item['jumlah_beli'] . ") : " . number_format($subPrice, 0,'.','.');
    // Menambahkan harga subtotal ke total harga 
    $price += $subPrice;
}

echo "</ol>";
echo "<br>";

echo "Total yang harus di bayar <b> Rp. " . number_format($subPrice, 0,'.','.') . "</b>";

?>

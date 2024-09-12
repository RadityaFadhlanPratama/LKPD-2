<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    
<form action="" method="post">
    <label for="">masukan jumlah uang</label>
    <input type="number" name="number" id="">
    <button type="button" class="btn btn-outline-success">Kirim</button>
    

    <?php 
     
     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $number =$_POST['number'];

        function koin($uang) {
            $arr = [];
        
            $koinUang = substr($uang, -6);
        
            if ($koinUang % 100000 != $koinUang) {
                $jumlahlembar100k = floor($koinUang/100000);
                $koinUang -= $jumlahlembar100k*100000;
                array_push($arr, "Rp. 100000 ada $jumlahlembar100k");
        }
        
            if ($koinUang % 20000 != $koinUang) {
                $jumlahlembar20ribu = floor($koinUang/20000);
                $koinUang -= $jumlahlembar20ribu *20000;
                array_push($arr, "Rp. 20000 ada $jumlahlembar20ribu");
        }
        
            if ($koinUang % 5000 != $koinUang) {
                $jumlahlembar5ribu = floor($koinUang/5000);
                $koinUang -= $jumlahlembar5ribu *5000;
                array_push($arr, "Rp. 5000 ada $jumlahlembar5ribu");
        }
        
        
        if ($koinUang % 500 != $koinUang) {
            $jumlahlembar500perak = floor($koinUang/500);
            $koinUang -= $jumlahlembar500perak *500;
            array_push($arr, "Rp. 500 ada $jumlahlembar500perak");
        }
        
        
            echo "Jenis uang kertas untuk Rp. " . number_format($uang,0,'.','.',) . " : <br>";
            echo "<ul>";
            foreach ($arr as $value) {
                echo "<li>  $value  </li>";
            }echo "<ul>";
        }
        
        
        koin($number);
     }

?>
</form>
</body>
</html>
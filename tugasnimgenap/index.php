<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS PERHITUNGAN BILANGAN KURANG DARI 10K</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/ICCSN.ico" type="image/ico" sizes="16x16">
</head>

<body>
    <div>
        <h2>
            +++ BILANGAN PERKALIAN DENGAN 4 YANG KURANG DARI 10000 +++
        </h2> <br>
        <?php
        //NIMGENAP
        echo "<font color='aqua'><b>HASIL BILANGAN PERKALIAN DENGAN 4 < 10000 {NIM GENAP}</b> </font>";
        echo "<br><br>";
        for ($angka = 1; $angka < 10000; $angka *= 4) {
            echo "Hasil perkalian dengan 4 = " . $angka . "<br>";
        }

        //NIMGANJIL
        echo "<font color='yellow'><br> <b>HASIL BILANGAN PEMBAGIAN DENGAN 4 < 10000 {NIM GANJIL}</b></font>";
        echo "<br><br>";
        for ($angka = 10000; $angka > 1; $angka /= 4) {
            echo "Hasil pembagian dengan 4 = " . $angka . "<br>";
        }
        ?>


    </div>
    <footer>
        Copyright © 2023 Muh Ikhsan M | 21104410070 - All rights Reserved.
    </footer>

</body>
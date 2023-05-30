<?php
//NIMGENAP
echo "<b>HASIL BILANGAN PERKALIAN DENGAN 4 < 10000</b>";
echo "<br><br>";
for ($angka = 1; $angka < 10000; $angka *= 4) {
    echo "Hasil perkalian dengan 4 = " . $angka . "<br>";
}

//NIMGANJIL
echo "<br> <b>HASIL BILANGAN PEMBAGIAN DENGAN 4 < 10000</b>";
echo "<br><br>";
for ($angka = 10000; $angka > 1; $angka /= 4) {
    echo "Hasil pembagian dengan 4 = " . $angka . "<br>";
}

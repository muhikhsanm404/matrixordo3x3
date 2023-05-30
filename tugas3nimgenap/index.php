<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 3 PERHITUNGAN MATRIX 3X3</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/ICCSN.ico" type="image/ico" sizes="16x16">
</head>

<body>
    <div>
        <h2>
            +++ PERHITUNGAN MATRIX ORDO [3 X 3]+++
        </h2> <br>
        <?php
        //NIMGENAP
        echo "<font color='yellow'><br> <b>NILAI TRANSPOSE DARI MATRIX A ORDO 3X3 {NIM GENAP}</b>
        </font>";
        echo "<br><br>";
        $matrixA = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];

        $matrix3A = array_merge($matrixA, $matrixA);
        // matrix A
        echo "<font color='red'><br> <b>Matriks A ordo 3x3 : </b> <br> <br/></font>";
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo $matrix3A[$i][$j] . " ";
            }
            echo "<br>";
        }

        // Menentukan matriks sebesar 3A
        $B = array();
        foreach ($matrixA  as $row) {
            $newRow = array();
            foreach ($row as $value) {
                $newRow[] = 3 * $value;
            }
            $B[] = $newRow;
        }

        // Matriks A
        echo "<font color='red'><b>Matriks 3A ordo 3x3 :</b><br><br/></font>";
        foreach ($B as $row) {
            foreach ($row as $value) {
                echo $value . " ";
            }
            echo "<br>";
        }

        // Transpose dari Matriks 3A
        echo "<font color='red'><br><b>Transpose dari Matriks 3A :</b><br><br/></font>";
        for ($i = 0; $i < count($B[0]); $i++) {
            for ($j = 0; $j < count($B); $j++) {
                echo $B[$j][$i] . " ";
            }
            echo "<br>";
        }



        //NIMGANJIL
        echo "<font color='yellow'><br> <b>HASIL AKHIR DARI MATRIX B ORDO 3X3 {NIM GANJIL} </b>
        </font> <br>";
        //Matriks 3x3  [987 654 321]
        $matrix = [
            [9, 8, 7],
            [6, 5, 4],
            [3, 2, 1]
        ];

        //Matriks 2B [2x3] yang dibuat dengan menggandakan matriks B [3x3]
        $matrix2B = array_merge($matrix, $matrix);

        //Menampilkan matriks 2B
        echo "<font color='red'><br><b> Matriks B ordo 3x3 : </b> <br> <br/></font>";
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo $matrix2B[$i][$j] . " ";
            }
            echo "<br>";
        }

        //Menambahkan matriks B [3x3] dengan matriks 2B sehingga menjadi matriks akhir [3x3]
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $matrix[$i][$j] += $matrix2B[$i + 3][$j];
            }
        }

        //matriks akhir
        echo "<font color='red'><br><b> Hasil Akhir Matriks Matrix 2B : </b> <br> <br/></font>";
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                echo $matrix[$i][$j] . " ";
            }
            echo "<br>";
        }

        ?>



    </div>
    <footer>
        Copyright © 2023 Muh Ikhsan M | 21104410070 - All rights Reserved.
    </footer>

</body>
<?php
        // Variable
        //1nama; Contoh Salah ( karena diawali angka)
        //$#nama; Contoh salah (Ada simbol ditengah)
        //nama; Contoh salah (Tidak ada simbol $)
        $nama = "Zunadea";
        $usia = 16;
        echo "nama saya $nama <br>";
        echo "usia saya $usia tahun <br>";
        // Tipe data (Integer, Float, String)
        // (Bolean, Array)
        $namalengkap = "Zunadea"; // String
        $umur = 15; // Integeer
        $nilai = 76.56; // Float
        $jomblo = TRUE; // Boolean (TRUE/FALSE)

        // Array String
        $namarpl11 = array("Alya", "Dwi", "Eben");

        echo "Nama Lengkap : $namalengkap <br>";
        echo "Umur : $umur <br>";
        echo "Nilai : $nilai <br>";
        echo "Jomblo : $jomblo <br>";
        echo "<hr>";
        echo "array 0 : $namarpl11[0] <br>"; // Alya
        echo "array 2 : $namarpl11[2] <br>"; // Eben
        echo "<hr>";

        //Aritmatika(+ - / * %)
        $angka1 = 10; echo "<br>";
        $angka2 = 5; echo "<br>";

        echo "Tambah :" . $tambah = $angka1 + $angka2 . "<br>";
        echo "Kurang :" . $kurang = $angka1 - $angka2 . "<br>";
        echo "Bagi :" . $bagi = $angka1 / $angka2 . "<br>";
        echo "Kali :" . $kali = $angka1 * $angka2 . "<br>";
        echo "Sisa Bagi :" . $sisabagi = $angka1 % $angka2 . "<br>";

        // Operator Perbandingan (>, <, !=, ==, ===)
        // Return TRUE(1), FALSE(NULL)
        $a = 10;
        $b = 5;
        $c = "10";

        echo "== :"; echo $a == $b; echo "<br>";
        echo "> :"; echo $a > $b; echo "<br>";
        echo "< :"; echo $a < $b; echo "<br>";
        echo "!= :"; echo $a != $b; echo "<br>";
        echo "=== :"; echo $a === $b; echo "<br>";

        // Operator Logika (AND, OR, &&, ||)
        // IF ELSE

        $x = 10;
        $y = 20;

        if ($x == 10 AND $y == 20){echo "Terpenuhi dua variable <hr>";}
        if ($x == 5 AND $y == 10){echo "Salah satu Variable Terpenui <hr>";}

?>
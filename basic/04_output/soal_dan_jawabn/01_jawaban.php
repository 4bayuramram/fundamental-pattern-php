<?php

/*
File: jawaban.php
File ini berisi jawaban dari 10 soal tentang Output PHP (echo, print)
Dilengkapi penjelasan bagaimana tiap soal diselesaikan.

*/

/*
1. Tampilkan tulisan "Hello PHP" menggunakan echo.
Cara penyelesaian: gunakan echo untuk menampilkan teks.
*/
echo "1. Hello PHP";
echo "<br>";


/*
2. Tampilkan dua string sekaligus menggunakan echo dengan multiple argument.
Cara penyelesaian: echo dapat menerima beberapa argumen yang dipisah koma.
*/
echo "2. Belajar", " PHP";
echo "<br>";


/*
3. Tampilkan kalimat "Belajar PHP itu mudah" menggunakan print.
Cara penyelesaian: print hanya menerima satu argumen.
*/
print "3. Belajar PHP itu mudah";
echo "<br>";


/*
4. Buat variabel $nama = "Budi" lalu tampilkan menggunakan echo.
Cara penyelesaian: buat variabel lalu tampilkan dengan echo.
*/
$nama = "Budi";
echo "4. " . $nama;
echo "<br>";


/*
5. Gabungkan string "Nama saya " dan variabel $nama menggunakan operator titik.
Cara penyelesaian: gunakan operator concatenation (.)
*/
echo "5. Nama saya " . $nama;
echo "<br>";


/*
6. Buat variabel $umur = 20 lalu tampilkan dengan interpolasi string.
Cara penyelesaian: gunakan double quotes agar variabel terbaca otomatis.
*/
$umur = 20;
echo "6. Umur saya $umur tahun";
echo "<br>";


/*
7. Buat array ["PHP","JS","HTML"] lalu tampilkan dengan print_r().
Cara penyelesaian: print_r digunakan untuk menampilkan isi array.
*/
$list = ["PHP", "JS", "HTML"];
echo "7. ";
print_r($list);
echo "<br>";


/*
8. Buat script yang menampilkan HTML <h1>Judul Belajar</h1> menggunakan echo.
Cara penyelesaian: echo dapat memuat HTML.
*/
echo "8. <h1>Judul Belajar</h1>";
echo "<br>";


/*
9. Buat output buffering sederhana: simpan echo "Latihan" ke buffer lalu tampilkan.
Cara penyelesaian: gunakan ob_start(), echo, ob_get_clean().
*/
ob_start();
echo "Latihan";
$hasilBuffer = ob_get_clean();
echo "9. " . $hasilBuffer;
echo "<br>";


/*
10. Tampilkan input user berisi tag <b>tes</b> secara aman menggunakan htmlspecialchars().
Cara penyelesaian: htmlspecialchars akan mengubah karakter berbahaya menjadi aman.
*/
$input = "<b>tes</b>";
echo "10. " . htmlspecialchars($input);
echo "<br>";

?>
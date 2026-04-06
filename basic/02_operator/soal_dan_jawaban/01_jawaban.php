<?php

/**
 * FILE: jawaban_operator.php
 * Tujuan file ini
 * membantu memahami cara menjawab soal operator PHP
 * setiap soal disertai langkah logika sederhana
 * jalankan: php jawaban_operator.php
 */


/* SOAL 1
 membuat 2 variabel lalu menjalankan operator matematika dasar
 operator yang dipakai: + - * / %
*/

$a = 12;
$b = 4;

echo "SOAL 1\n";

echo "a + b = " . ($a + $b) . "\n"; // tambah 12 + 4

echo "a - b = " . ($a - $b) . "\n"; // kurang 12 - 4

echo "a * b = " . ($a * $b) . "\n"; // kali 12 * 4

echo "a / b = " . ($a / $b) . "\n"; // bagi 12 / 4

echo "a % b = " . ($a % $b) . "\n"; // sisa bagi 12 % 4


/* SOAL 2
 memahami perbedaan pre increment dan post increment
*/

$c = 5;

echo "\nSOAL 2\n";

echo "++c = " . (++$c) . "\n"; // tambah dulu baru tampil

echo "c++ = " . ($c++) . "\n"; // tampil dulu baru tambah

echo "nilai akhir c = $c\n"; // cek hasil akhir variabel


/* SOAL 3
 assignment operator digunakan untuk mempersingkat operasi
 contoh: d += 5 artinya d = d + 5
*/

$d = 20;
$d += 5;

echo "\nSOAL 3\n";
echo "nilai akhir d = $d\n";


/* SOAL 4
 membandingkan dua nilai dengan tipe berbeda
 == hanya cek nilai
 === cek nilai dan tipe data
*/

$e = 10;
$f = "10";

echo "\nSOAL 4\n";

var_dump($e == $f); // true karena nilainya sama

var_dump($e === $f); // false karena tipe berbeda


/* SOAL 5
 operator logika digunakan untuk kondisi true false
*/

$g = true;
$h = false;

echo "\nSOAL 5\n";

var_dump($g && $h); // true jika keduanya true

var_dump($g || $h); // true jika salah satu true

var_dump(!$g); // membalik nilai


/* SOAL 6
 operator titik digunakan untuk menggabungkan string
*/

$nama = "Belajar";
$materi = "PHP";

echo "\nSOAL 6\n";

echo $nama . " " . $materi . "\n";


/* SOAL 7
 operator + pada array digunakan untuk union array
 menggabungkan key yang berbeda
*/

$array1 = ["x" => 1];
$array2 = ["y" => 2];

$hasil = $array1 + $array2;

echo "\nSOAL 7\n";

print_r($hasil);


/* SOAL 8
 ternary operator adalah bentuk singkat if else
 format: kondisi ? hasil_true : hasil_false
*/

$nilai = 70;

$status = ($nilai >= 75) ? "LULUS" : "TIDAK LULUS";

echo "\nSOAL 8\n";

echo "status = $status\n";


/* SOAL 9
 null coalescing digunakan untuk memberi nilai default
 jika variabel tidak ada
*/

$user = $_GET['nama'] ?? "Guest";

echo "\nSOAL 9\n";

echo "user = $user\n";


/* SOAL 10
 instanceof digunakan untuk mengecek tipe object
*/

class Mobil {}

$obj = new Mobil();

echo "\nSOAL 10\n";

var_dump($obj instanceof Mobil);



?>
<?php

/**
 * FILE: operator.php
 * Tutorial operator dasar PHP
 * File bisa langsung dijalankan
 * Tujuan: memahami operator lewat contoh output
 * php basic/02_operator/01_operator.php (run)

 */

/*
 Operator adalah simbol untuk melakukan operasi pada nilai

 Jenis operator berdasarkan jumlah operand
 Unary   : 1 nilai contoh ++$a
 Binary  : 2 nilai contoh $a + $b
 Ternary : 3 nilai contoh kondisi ? A : B
*/


/* ARITHMETIC OPERATOR */

$a = 10;
$b = 3;

echo "ARITHMETIC OPERATOR\n";
echo "a + b = " . ($a + $b) . "\n"; // penjumlahan
echo "a - b = " . ($a - $b) . "\n"; // pengurangan
echo "a * b = " . ($a * $b) . "\n"; // perkalian
echo "a / b = " . ($a / $b) . "\n"; // pembagian
echo "a % b = " . ($a % $b) . "\n"; // sisa bagi


/* INCREMENT DAN DECREMENT */

$c = 5;

echo "\nINCREMENT DAN DECREMENT\n";
echo "++c = " . (++$c) . "\n"; // tambah dulu tampil

echo "c++ = " . ($c++) . "\n"; // tampil dulu tambah

echo "nilai akhir c = $c\n";


/* ASSIGNMENT OPERATOR */

$d = 10;
$d += 5; // sama dengan d = d + 5

echo "\nASSIGNMENT OPERATOR\n";
echo "nilai d = $d\n";


/* COMPARISON OPERATOR */

$e = 10;
$f = "10";

echo "\nCOMPARISON OPERATOR\n";
var_dump($e == $f); // sama nilai
var_dump($e === $f); // sama nilai dan tipe


/* LOGICAL OPERATOR */

$g = true;
$h = false;

echo "\nLOGICAL OPERATOR\n";
var_dump($g && $h); // AND
var_dump($g || $h); // OR
var_dump(!$g); // NOT

/*
 Catatan
 && lebih direkomendasikan dibanding AND
 || lebih direkomendasikan dibanding OR
 karena prioritas operator berbeda
*/


/* STRING OPERATOR */

$nama = "Belajar";
$materi = "PHP";

echo "\nSTRING OPERATOR\n";
echo $nama . " " . $materi . "\n"; // gabung string


/* ARRAY OPERATOR */

$array1 = ["a" => 1];
$array2 = ["b" => 2];

$hasil = $array1 + $array2;

echo "\nARRAY OPERATOR\n";
print_r($hasil);


/* TERNARY OPERATOR */

$nilai = 80;
$status = ($nilai >= 75) ? "LULUS" : "TIDAK LULUS";

echo "\nTERNARY OPERATOR\n";
echo "status = $status\n";


/* NULL COALESCING OPERATOR */

$username = $_GET['user'] ?? "Guest";

echo "\nNULL COALESCING OPERATOR\n";
echo "user = $username\n";


/* TYPE OPERATOR */

class Mobil {}

$obj = new Mobil();

echo "\nTYPE OPERATOR\n";
var_dump($obj instanceof Mobil);


/* ERROR CONTROL OPERATOR */

/*
 tanda @ digunakan untuk menyembunyikan error
 contoh membaca file yang tidak ada
*/

$file = @file("tidak_ada.txt");

echo "\nERROR CONTROL OPERATOR\n";
echo "error disembunyikan dengan @\n";


/* EXECUTION OPERATOR */

/*
 menggunakan backtick
 menjalankan perintah shell
 tidak selalu aktif di semua server
*/

// echo `whoami`;


echo "\nSELESAI BELAJAR OPERATOR PHP\n";

?>
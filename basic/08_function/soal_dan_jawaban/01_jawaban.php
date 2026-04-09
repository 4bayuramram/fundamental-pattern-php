<?php

/*
File: jawaban.php
Materi: Jawaban Latihan 10 Soal PHP Function Pemula
Penjelasan:
- File ini berisi jawaban dari 10 soal latihan function PHP untuk pemula.
- Setiap soal dijawab dengan kode PHP, komentar penjelasan detail, pola cara menjawab,
  dan contoh output yang akan muncul saat dijalankan di terminal.
- Tujuan: membantu pemula memahami konsep function, parameter, return, reference, recursion, anonymous function, global variable, dan function built-in.

php basic/08_function/soal_dan_jawaban/01_jawaban.php (for run)
*/

/* ========================
   Soal 1
   Buat function bernama "halo" yang menampilkan "Halo Dunia!".
   ======================== */

/* 
Penjelasan:
- Keyword function digunakan untuk membuat function.
- Nama function bebas, diikuti tanda kurung ().
- Blok kode ditulis dalam { }.
- echo digunakan untuk menampilkan teks.
- Cara menjawab: definisikan function, kemudian panggil function tersebut.
*/

function halo() {
    echo "Halo Dunia!";
}

halo(); // Memanggil function
echo "\n"; // Membuat baris baru

/*
Output di terminal:
Halo Dunia!
*/

/* ========================
   Soal 2
   Buat function "salam" dengan parameter $nama yang menampilkan "Halo, [nama]!"
   ======================== */

/*
Penjelasan:
- Parameter adalah input untuk function.
- $nama akan digantikan dengan nilai yang dikirim saat memanggil function.
- echo menampilkan hasil.
- Pola menjawab: definisikan function dengan parameter, panggil function dengan nilai.
*/

function salam($nama) {
    echo "Halo, $nama!";
}

salam("Budi");
echo "\n";

/*
Output di terminal:
Halo, Budi!
*/

/* ========================
   Soal 3
   Buat function "tambah" yang menerima dua angka dan mengembalikan hasilnya.
   ======================== */

/*
Penjelasan:
- return digunakan untuk mengembalikan nilai dari function.
- Nilai return bisa disimpan ke variabel.
- echo menampilkan hasil.
- Pola: function dengan parameter, return hasil operasi, simpan ke variabel, tampilkan.
*/

function tambah($a, $b) {
    return $a + $b;
}

$hasil = tambah(5, 3);
echo $hasil;
echo "\n";

/*
Output:
8
*/

/* ========================
   Soal 4
   Buat function "perkenalan" dengan parameter default $nama="Anonim".
   ======================== */

/*
Penjelasan:
- Parameter default digunakan jika function dipanggil tanpa argumen.
- echo menampilkan teks.
- Cara menjawab: definisikan function dengan parameter default, panggil dua kali.
*/

function perkenalan($nama = "Anonim") {
    echo "Nama saya $nama";
}

perkenalan();        // tanpa parameter
echo "\n";
perkenalan("Rina");  // dengan parameter
echo "\n";

/*
Output:
Nama saya Anonim
Nama saya Rina
*/

/* ========================
   Soal 5
   Function "ubahNilai" dengan reference untuk menambah 10.
   ======================== */

/*
Penjelasan:
- Parameter reference menggunakan & di depan nama parameter.
- Nilai asli variabel akan ikut berubah.
- Pola: function menerima parameter reference, ubah nilai, tampilkan variabel setelah function dipanggil.
*/

function ubahNilai(&$angka) {
    $angka += 10;
}

$nilai = 5;
ubahNilai($nilai);
echo $nilai;
echo "\n";

/*
Output:
15
*/

/* ========================
   Soal 6
   Function "jumlahSemua" menerima jumlah parameter tak terbatas.
   ======================== */

/*
Penjelasan:
- PHP 7.3 menggunakan func_get_args() untuk menangkap semua parameter.
- array_sum() menjumlahkan semua elemen array.
- Pola: definisikan function, ambil semua argumen, jumlahkan, return hasil.
*/

function jumlahSemua() {
    $angka = func_get_args();
    return array_sum($angka);
}

echo jumlahSemua(1,2,3,4,5);
echo "\n";

/*
Output:
15
*/

/* ========================
   Soal 7
   Function "faktorial" menggunakan recursion.
   ======================== */

/*
Penjelasan:
- Recursion adalah function memanggil dirinya sendiri.
- Gunakan kondisi dasar untuk menghentikan recursion (if $n <= 1 return 1).
- Pola: function parameter n, cek kondisi dasar, return n * function(n-1).
*/

function faktorial($n) {
    if($n <= 1) return 1;
    return $n * faktorial($n - 1);
}

echo faktorial(5);
echo "\n";

/*
Output:
120
*/

/* ========================
   Soal 8
   Anonymous Function / Closure
   ======================== */

/*
Penjelasan:
- Function tanpa nama disimpan dalam variabel.
- Bisa dipanggil dengan $variabel(param).
- Pola: buat variable = function(parameter){ kode }, panggil variable(param).
*/

$haloAnonim = function($nama) {
    echo "Halo $nama";
};

$haloAnonim("Andi");
echo "\n";

/*
Output:
Halo Andi
*/

/* ========================
   Soal 9
   Function menggunakan keyword global untuk menjumlahkan variabel global $a dan $b
   ======================== */

/*
Penjelasan:
- global keyword memungkinkan function mengakses variabel global.
- echo menampilkan hasil.
- Pola: definisikan function, gunakan global, lakukan operasi, tampilkan.
*/

$a = 5;
$b = 10;

function jumlahGlobal() {
    global $a, $b;
    echo $a + $b;
}

jumlahGlobal();
echo "\n";

/*
Output:
15
*/

/* ========================
   Soal 10
   Function menampilkan panjang string menggunakan strlen()
   ======================== */

/*
Penjelasan:
- strlen() menghitung jumlah karakter string.
- Pola: definisikan string, panggil function built-in strlen, echo hasil.
*/

$teks = "Belajar PHP";

function panjangString($str) {
    return strlen($str);
}

echo panjangString($teks);
echo "\n";

/*
Output:
11
*/

/* ========================
   Kesimpulan dari 10 Soal
   ======================== */

/*
- Function di PHP membantu menulis kode modular dan terstruktur.
- Parameter dan return memungkinkan function menerima input dan memberikan output.
- Parameter default memudahkan pemanggilan tanpa argumen.
- Reference memungkinkan function mengubah nilai variabel asli.
- Recursion memungkinkan function memanggil dirinya sendiri.
- Anonymous function / closure berguna untuk callback dan fungsi singkat.
- Keyword global / $GLOBALS digunakan untuk mengakses variabel global di function.
- Built-in function seperti strlen() mempermudah operasi string dan array.
- Pemahaman soal ini membantu pemula menguasai dasar penggunaan function di PHP.
*/

?>
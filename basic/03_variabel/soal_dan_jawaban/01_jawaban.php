<?php

/*
Kunci Jawaban Latihan Variabel PHP
php basic/03_variabel/soal_dan_jawaban/01_jawaban.php (for run)
File: jawaban.php
File ini bisa langsung dijalankan tanpa error
Setiap bagian berisi penjelasan detail agar mudah dipahami pemula
. PHP_EOL; dipakai untuk pindah baris di terminal (newline).
*/


/*
SOAL 1
Membuat variabel bernama $nama
Syntax:
$ digunakan untuk membuat variabel di PHP
= digunakan untuk memberi nilai ke variabel
*/

$nama = "Budi";

// echo digunakan untuk menampilkan output ke terminal
// PHP_EOL digunakan untuk pindah baris di terminal

echo "Nama saya adalah: $nama" . PHP_EOL;


/*
SOAL 2
Membuat variabel angka bernama $umur
PHP tidak perlu menentukan tipe data secara manual
PHP otomatis mengenali angka sebagai integer
*/

$umur = 20;

// Menggabungkan teks dengan variabel menggunakan tanda kutip ganda

echo "Umur saya adalah: $umur" . PHP_EOL;


/*
SOAL 3
Menggabungkan dua variabel menjadi satu output
Teknik ini disebut concatenation sederhana dalam string interpolation
*/

$namaDepan = "Budi";
$namaBelakang = "Santoso";

// Variabel bisa langsung dipanggil dalam string

echo "Nama lengkap saya: $namaDepan $namaBelakang" . PHP_EOL;


/*
SOAL 4
Case-sensitive artinya huruf besar dan kecil dianggap berbeda
$nama berbeda dengan $Nama
*/

$nama = "Andi";
$Nama = "Rina";

// Kedua variabel ini berbeda walaupun terlihat mirip

echo "Isi variabel nama: $nama" . PHP_EOL;
echo "Isi variabel Nama: $Nama" . PHP_EOL;


/*
SOAL 5
Assignment by value
Nilai variabel disalin ke variabel baru
Perubahan variabel baru tidak mempengaruhi variabel lama
*/

$a = 10;

// Nilai $a disalin ke $b
$b = $a;

// Mengubah nilai $b
$b = 20;

// $a tetap 10 karena hanya disalin nilainya

echo "Nilai a: $a" . PHP_EOL;
echo "Nilai b: $b" . PHP_EOL;


/*
SOAL 6
Assignment by reference menggunakan simbol &
Simbol & membuat dua variabel menunjuk ke data yang sama
Jika satu berubah maka yang lain ikut berubah
*/

$x = 5;

// & membuat $y menjadi referensi dari $x
$y = &$x;

// Mengubah nilai referensi
$y = 100;

// Nilai $x ikut berubah karena referensi

echo "Nilai x setelah reference: $x" . PHP_EOL;


/*
SOAL 7
Menggunakan keyword global
Keyword global digunakan agar variabel global bisa dipakai di dalam function
*/

$angka = 5;

function tambahGlobal(){

    // Menghubungkan variabel lokal function dengan variabel global
    global $angka;

    // Menambahkan nilai
    $angka = $angka + 5;
}

// Memanggil function

tambahGlobal();

// Menampilkan hasil perubahan variabel global

echo "Hasil global keyword: $angka" . PHP_EOL;


/*
SOAL 8
Menggunakan array khusus $GLOBALS
$GLOBALS menyimpan semua variabel global dalam bentuk array associative
Key adalah nama variabel
Value adalah isi variabel
*/

$a = 2;
$b = 3;

function tambahGlobals(){

    // Mengakses variabel global melalui array GLOBALS
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

// Memanggil function

tambahGlobals();

// Menampilkan hasil

echo "Hasil GLOBALS: $b" . PHP_EOL;


/*
SOAL 9
Static variable
Variabel static hanya dibuat sekali
Nilainya tetap tersimpan walaupun function selesai dijalankan
*/

function counter(){

    // static membuat nilai tersimpan antar pemanggilan function
    static $nilai = 0;

    // Menampilkan nilai
    echo "Counter saat ini: $nilai" . PHP_EOL;

    // Menambah nilai
    $nilai++;
}

// Memanggil function 3 kali

counter();
counter();
counter();


/*
SOAL 10
Variable variables
Variabel yang namanya berasal dari isi variabel lain
Contoh:
$kata berisi 'buah'
Maka $$kata berarti $buah
*/

$kata = "buah";

// Membuat variabel baru bernama $buah
$$kata = "apel";

// Menampilkan isi variabel hasil variable variable

echo "Isi dari variable variable: $buah" . PHP_EOL;

?>
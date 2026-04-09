<?php

/*
Materi Ringkasan Function PHP
File: Function.php
Materi ini menjelaskan dasar function di PHP berdasarkan dokumentasi resmi PHP
dengan bahasa sederhana untuk pemula.

Function di PHP adalah blok kode yang dapat dipanggil berkali-kali untuk melakukan 
tugas tertentu. Function membantu membuat kode lebih terstruktur, modular, dan 
mudah dipelihara. PHP memiliki function built-in dan memungkinkan kita membuat 
function sendiri (user-defined function).

php basic/07_function/01_function.php (for run)
*/

// 1. Apa itu Function?
// Function adalah blok kode yang dijalankan ketika dipanggil
function sapa() {
    echo "Halo, selamat datang!";
}

sapa(); // memanggil function


/*
2. Function dengan parameter
Parameter adalah input untuk function
*/
function sapaOrang($nama) {
    echo "Halo, $nama!";
}

sapaOrang("Budi");


/*
3. Function dengan nilai balik (return)
Return digunakan agar function menghasilkan nilai
*/
function tambah($a, $b) {
    return $a + $b;
}

$hasil = tambah(5, 3);
echo $hasil; // 8


/*
4. Parameter default
Parameter bisa memiliki nilai default jika tidak diisi saat pemanggilan
*/
function perkenalan($nama = "Anonim") {
    echo "Nama saya $nama";
}

perkenalan();       // Nama saya Anonim
perkenalan("Rina"); // Nama saya Rina


/*
5. Passing by reference (&)
Parameter bisa dikirim sebagai referensi agar nilai asli bisa diubah
*/
function tambahLagi(&$angka) {
    $angka += 10;
}

$nilai = 5;
tambahLagi($nilai);
echo $nilai; // 15


/*
6. Variadic function
Function bisa menerima jumlah parameter tak terbatas
*/
function jumlahSemua() {
    $angka = func_get_args(); // PHP 7.3 gunakan func_get_args()
    return array_sum($angka);
}

echo jumlahSemua(1,2,3,4,5); // 15


/*
7. Scope Variabel dalam Function
Variabel di dalam function bersifat lokal secara default
*/
$angkaGlobal = 10;

function cobaScope() {
    $angkaLokal = 5;
    echo $angkaLokal;
    // echo $angkaGlobal; // error karena tidak dikenal dalam function
}

cobaScope();


/*
8. Mengakses variabel global
Gunakan keyword global atau $GLOBALS
*/
$a = 5;
$b = 10;

function jumlahGlobal() {
    global $a, $b;
    echo $a + $b;
}

jumlahGlobal(); // 15

function jumlahGlobalAlt() {
    echo $GLOBALS['a'] + $GLOBALS['b'];
}

jumlahGlobalAlt(); // 15


/*
9. Anonymous Function / Closure
Function tanpa nama, sering digunakan sebagai callback
*/
$halo = function($nama) {
    echo "Halo $nama";
};

$halo("Budi");


/*
10. Recursion
Function bisa memanggil dirinya sendiri
*/
function faktorial($n) {
    if($n <= 1) return 1;
    return $n * faktorial($n - 1);
}

echo faktorial(5); // 120


/*
11. Function Built-in PHP
PHP memiliki banyak function siap pakai, contohnya:
strlen(), str_replace(), array_merge(), in_array(), sort(), date(), dsb.
*/

$teks = "Belajar PHP";
echo strlen($teks); // 11


/*
12. Tips Penggunaan Function
- Gunakan nama function jelas dan deskriptif
- Hindari function terlalu panjang
- Pisahkan tugas berbeda ke function berbeda
- Gunakan parameter dan return untuk fleksibilitas
*/


/*
Kesimpulan
Function adalah dasar penting dalam PHP
Digunakan untuk modularisasi kode
Memiliki parameter, return, dan scope
Mendukung reference, variadic, recursion, anonymous
PHP menyediakan banyak function built-in untuk mempermudah pemrograman
*/

?>
<?php

/*
Materi Ringkasan Variabel PHP
File: Variabel.php
Materi ini menjelaskan dasar variabel PHP dengan bahasa sederhana untuk pemula

Variabel di PHP adalah tempat untuk menyimpan data yang diawali dengan tanda $ 
dan tidak perlu deklarasi tipe data di awal karena PHP bersifat dynamic typing. 
Artinya tipe data akan menyesuaikan otomatis dengan nilai yang diberikan. Berbeda
dengan Java yang wajib menentukan tipe data sejak awal seperti int, String, atau 
boolean (static typing). Sementara JavaScript mirip PHP karena juga dynamic typing,
tetapi penulisan variabelnya menggunakan var, let, atau const tanpa simbol $. 
Selain itu, scope variabel di PHP secara default terpisah antara global dan function 
sehingga variabel global tidak bisa langsung dipakai di dalam function tanpa keyword 
global atau $GLOBALS, sedangkan di JavaScript lebih fleksibel tergantung var, let, 
atau const, dan di Java menggunakan konsep class-based scope sehingga variabel 
biasanya berada di dalam class.




 php basic/03_variabel/01_variabel.php (for run)
*/

// 1. Apa itu variabel?
// Variabel adalah tempat menyimpan data
$nama = "Budi";
$umur = 20;

// Variabel diawali dengan tanda $
// Contoh penggunaan
 echo $nama;
 echo $umur;


/*
2. Aturan penamaan variabel
- Harus diawali huruf atau underscore (_)
- Tidak boleh diawali angka
- Boleh berisi huruf, angka, underscore
- Bersifat case-sensitive (beda huruf besar kecil beda variabel)
*/

$namaDepan = "Budi"; // benar
$_alamat = "Jogja"; // benar
// $1nama = "Salah"; // salah karena diawali angka


/*
3. Variabel bersifat case-sensitive
$nama berbeda dengan $Nama
*/

$nama = "Andi";
$Nama = "Rina";

 echo $nama;
 echo $Nama;


/*
4. Assignment by value
Nilai variabel akan disalin ke variabel lain
Perubahan variabel baru tidak mempengaruhi variabel lama
*/

$a = 10;
$b = $a;
$b = 20;

 echo $a; // tetap 10
 echo $b; // menjadi 20


/*
5. Assignment by reference (&)
Variabel baru menjadi referensi variabel lama
Jika salah satu berubah maka keduanya ikut berubah
*/

$x = 5;
$y = &$x;
$y = 100;

 echo $x; // ikut berubah menjadi 100


/*
6. Variabel tanpa deklarasi
PHP tidak perlu deklarasi tipe data
Jika variabel belum dibuat maka nilainya default NULL
*/

 echo $belumAda; // hasilnya NULL + warning


/*
7. Scope variabel
Scope adalah area dimana variabel bisa digunakan
Ada 2 jenis:
- Global
- Local
*/

$angka = 10; // global scope

function contohScope(){

    // echo $angka; // error karena tidak dikenal dalam function
}


/*
8. Menggunakan global keyword
Digunakan agar variabel global bisa dipakai dalam function
*/

$a = 5;
$b = 10;

function jumlah(){
    global $a, $b;
    $b = $a + $b;
}

jumlah();
 echo $b;


/*
9. Menggunakan $GLOBALS
Alternatif selain keyword global
*/

$c = 2;
$d = 3;

function tambah(){
    $GLOBALS['d'] = $GLOBALS['c'] + $GLOBALS['d'];
}

 tambah();
 echo $d;


/*
10. Static variabel
Nilainya tidak hilang walaupun function selesai dijalankan
*/

function counter(){
    static $nilai = 0;
    echo $nilai;
    $nilai++;
}

 counter();
 counter();
 counter();


/*
11. Variable variables
Variabel yang nama variabelnya diambil dari isi variabel lain
*/

$kata = "buah";
$$kata = "apel";

 echo $buah;


/*
12. Superglobals
Variabel khusus yang selalu tersedia di semua scope
Contoh:
$_GET
$_POST
$_REQUEST
$_COOKIE
$_SERVER
$_SESSION
$_FILES
*/

 echo $_SERVER['SERVER_NAME'];


/*
13. Mengambil data dari form
Contoh menggunakan method POST
*/

// echo $_POST['username'];


/*
14. Variabel array otomatis dibuat
Jika variabel array belum ada maka otomatis dibuat
*/

$list[] = "PHP";
$list[] = "HTML";

 print_r($list);


/*
15. Menentukan tipe data variabel
Gunakan fungsi berikut:
gettype()
is_int()
is_string()
is_array()
is_object()
*/

$data = "Belajar PHP";

 echo gettype($data);


/*
Kesimpulan
Variabel adalah dasar penting dalam PHP
Digunakan untuk menyimpan data
Memiliki aturan penamaan
Memiliki scope
Memiliki reference
Memiliki static
Memiliki superglobals
*/

?>

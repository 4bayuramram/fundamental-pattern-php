<?php
/*
File: jawaban.php
Jawaban lengkap 10 soal latihan PHP Namespace
Setiap soal memiliki kode, penjelasan, dan output.
File ini bisa dijalankan langsung di terminal atau browser.
*/
//  php basic/10_namespace/soal_dan_jawaban/01_jawaban.php (for run and path )
/* =========================================
Soal 1
Buat namespace Belajar\PHP\Siswa dengan class Murid dan method nama()
=================================================== */

namespace Belajar\PHP\Siswa;

/* 
Class Murid dibuat di dalam namespace Belajar\PHP\Siswa. 
Method nama() mengembalikan string "Budi". 
Konsep: Namespace untuk menghindari bentrokan nama class.
*/
class Murid {
    public function nama() {
        return "Budi";
    }
}

/* Membuat objek dan memanggil method */
$murid = new Murid();
echo $murid->nama() . PHP_EOL; // Output: Budi

/* =========================================
Soal 2
Buat namespace Belajar\PHP\Guru dengan class Pengajar dan method mapel()
=================================================== */

namespace Belajar\PHP\Guru;

class Pengajar {
    public function mapel() {
        return "Matematika";
    }
}

$guru = new Pengajar();
echo $guru->mapel() . PHP_EOL; // Output: Matematika

/* =========================================
Soal 3
Memanggil class Murid dari namespace lain menggunakan use
=================================================== */

namespace MainApp;

/*
Use statement digunakan untuk memanggil class dari namespace lain
agar tidak perlu menulis full namespace setiap kali memanggil class.
*/
use Belajar\PHP\Siswa\Murid;

$murid2 = new Murid();
echo $murid2->nama() . PHP_EOL; // Output: Budi

/* =========================================
Soal 4
Memanggil class Pengajar dari namespace lain menggunakan alias
=================================================== */

use Belajar\PHP\Guru\Pengajar as GuruMatematika;

$guru2 = new GuruMatematika();
echo $guru2->mapel() . PHP_EOL; // Output: Matematika

/* =========================================
Soal 5
Membuat function di namespace dan memanggil global function
=================================================== */

namespace Belajar\PHP\Fungsi;

function halo() {
    return "Halo Namespace!";
}

/* Memanggil function global strlen() menggunakan backslash */
echo \strlen("Test") . PHP_EOL; // Output: 4

/* =========================================
Soal 6
Membuat constant di namespace
=================================================== */

namespace Belajar\PHP\Konstanta;

const VERSI = "2.0";

echo VERSI . PHP_EOL; // Output: 2.0

/* =========================================
Soal 7
Menggabungkan array menggunakan global namespace
=================================================== */

namespace MainApp2;

$gabung = \array_merge([1,2],[3,4]);
print_r($gabung); 
/* Output:
Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
)
*/

/* =========================================
Soal 8
Dua namespace dengan class Buku berbeda
=================================================== */

namespace A\Produk;

class Buku {
    public function judul() {
        return "PHP untuk Pemula";
    }
}

namespace B\Produk;

class Buku {
    public function judul() {
        return "Belajar JavaScript";
    }
}

namespace MainApp3;

use A\Produk\Buku as BukuPHP;
use B\Produk\Buku as BukuJS;

$buku1 = new BukuPHP();
$buku2 = new BukuJS();

echo $buku1->judul() . PHP_EOL; // Output: PHP untuk Pemula
echo $buku2->judul() . PHP_EOL; // Output: Belajar JavaScript

/* =========================================
Soal 9
Dua namespace dengan class Kursi berbeda
=================================================== */

namespace C\Alat;

class Kursi {
    public function jenis() {
        return "Kayu";
    }
}

namespace D\Alat;

class Kursi {
    public function jenis() {
        return "Plastik";
    }
}

namespace MainApp4;

use C\Alat\Kursi as KursiKayu;
use D\Alat\Kursi as KursiPlastik;

$kayu = new KursiKayu();
$plastik = new KursiPlastik();

echo $kayu->jenis() . PHP_EOL; // Output: Kayu
echo $plastik->jenis() . PHP_EOL; // Output: Plastik

/* =========================================
Soal 10
Memanggil class atau function global dari namespace manapun
=================================================== */

/* 
Contoh: Memanggil class built-in PHP seperti DateTime di global namespace.
Gunakan backslash diawal nama class untuk memastikan memanggil class global.
*/
$date = new \DateTime();
echo $date->format('Y-m-d') . PHP_EOL; // Output: Tanggal saat ini

/* ===============================
KESIMPULAN
===============================

1. Namespace mencegah bentrokan nama class, function, dan constant.
2. Gunakan "namespace" di awal file untuk menentukan namespace.
3. Gunakan "use" untuk memanggil class/function/constant dari namespace lain.
4. Gunakan alias dengan "as" untuk mempersingkat atau membedakan nama class.
5. Global namespace bisa dipanggil dengan backslash "\".
6. Constant dan function juga bisa menggunakan namespace.
7. Nested namespace atau multi-level namespace bisa dibuat dengan backslash.
8. Array, built-in class, atau function global bisa dipanggil dari namespace lain dengan backslash.
9. Memahami namespace membantu struktur proyek besar agar lebih rapi.
10. Praktik membuat objek, memanggil method, dan menampilkan output di terminal membantu pemula memahami konsep namespace dengan lebih cepat.

*/

?>
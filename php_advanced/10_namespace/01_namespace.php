<?php

/*
Materi Ringkasan Namespace PHP
File: Namespace.php
Materi ini menjelaskan konsep namespace di PHP dengan bahasa sederhana
untuk pemula.

Namespace digunakan untuk mengorganisir kode PHP agar tidak terjadi konflik
nama antara class, function, atau constant. Sangat berguna saat aplikasi 
besar atau menggunakan library pihak ketiga.

Dokumentasi resmi: https://www.php.net/manual/en/language.namespaces.php
*/

// 1. Apa itu Namespace?
// Namespace adalah cara untuk mengelompokkan kode sehingga nama class, 
// function, atau constant tidak bentrok dengan kode lain.

// php basic/10_namespace/01_namespace.php


namespace Belajar\PHP\NamespaceContoh;

class Mobil {
    public function jenis() {
        return "SUV";
    }
}

$mobil = new Mobil();
echo $mobil->jenis(); // Output: SUV


/*
2. Deklarasi Namespace
- Namespace harus dideklarasikan di baris pertama file PHP, sebelum kode lain
- Bisa menggunakan nested namespace (namespace di dalam namespace)
*/

namespace Belajar\PHP\Kendaraan;

class Motor {
    public function jenis() {
        return "Sport";
    }
}

/*
3. Menggunakan namespace lain
- Gunakan kata kunci `use` untuk memanggil namespace lain
- Bisa juga menggunakan backslash \ secara langsung
*/

namespace MainApp;

use Belajar\PHP\NamespaceContoh\Mobil;
use Belajar\PHP\Kendaraan\Motor;

$mobil = new Mobil();
$motor = new Motor();

echo $mobil->jenis(); // SUV
echo $motor->jenis(); // Sport

/*
4. Alias namespace
- Bisa memberi nama alias agar lebih singkat
*/

use Belajar\PHP\Kendaraan\Motor as SepedaMotor;

$motor = new SepedaMotor();
echo $motor->jenis(); // Sport

/*
5. Namespace dan function
- Namespace juga berlaku untuk function
- Gunakan backslash \ untuk memanggil function global
*/

namespace Belajar\PHP\Fungsi;

function halo() {
    return "Halo dari namespace!";
}

// Memanggil function global
echo \strlen("Test"); // 4

/*
6. Namespace dan constant
- Sama seperti class/function, constant juga bisa diberi namespace
*/

namespace Belajar\PHP\Konstanta;

const VERSION = "1.0.0";

echo VERSION; // 1.0.0

/*
7. Global namespace
- Untuk memanggil class, function, atau constant yang berada di global
  namespace, gunakan backslash \ diawal
*/

namespace MainApp2;

$globalArray = \array_merge([1, 2], [3, 4]);
print_r($globalArray); // Array (1, 2, 3, 4)

/*
Kesimpulan:
- Namespace mencegah konflik nama class, function, atau constant
- Gunakan `namespace` di awal file
- Gunakan `use` untuk memanggil namespace lain
- Bisa membuat alias dengan `as`
- Backslash \ untuk memanggil global namespace
*/

?>
<?php
/*
File: jawaban.php
Materi: Jawaban Latihan Higher-order Function PHP
File ini berisi jawaban 10 soal latihan higher-order function PHP untuk pemula
Setiap soal dilengkapi:
- Jawaban kode PHP
- Penjelasan sintaks dan pola penyelesaian
- Output yang akan muncul saat dijalankan
- Komentar panjang agar pemula bisa belajar dari kode
*/

// jalankan file : php php_advanced/07_HOF/soal_dan_jawaban/01_jawaban.php

/*
==========================
Soal 1
Buat anonymous function yang menerima nama dan mengembalikan "Halo, <nama>!"
==========================
*/
$greet = function($name) {
    /*
    Penjelasan:
    - function($name) {...} -> membuat anonymous function (fungsi tanpa nama)
    - $name -> parameter fungsi
    - return "Halo, $name!"; -> mengembalikan string dengan interpolasi variabel
    */
    return "Halo, $name!";
};

echo $greet("Budi") . PHP_EOL; // Output: Halo, Budi!

/*
==========================
Soal 2
Fungsi applyOperation yang menerima dua angka dan fungsi operasi
==========================
*/
function applyOperation($a, $b, $operation) {
    /*
    Penjelasan:
    - $a, $b -> dua angka sebagai input
    - $operation -> fungsi callback yang diterapkan ke $a dan $b
    - return $operation($a, $b); -> menjalankan fungsi $operation dengan argumen $a dan $b
    */
    return $operation($a, $b);
}

$result = applyOperation(7, 3, function($x, $y) { return $x + $y; });
echo $result . PHP_EOL; // Output: 10

/*
==========================
Soal 3
Fungsi multiplier($factor) yang mengembalikan fungsi
==========================
*/
function multiplier($factor) {
    /*
    Penjelasan:
    - Fungsi ini mengembalikan anonymous function
    - 'use ($factor)' -> mengambil variabel $factor dari scope luar ke dalam closure
    - $number * $factor -> melakukan perkalian
    */
    return function($number) use ($factor) {
        return $number * $factor;
    };
}

$double = multiplier(2); // fungsi untuk mengalikan angka dengan 2
$triple = multiplier(3); // fungsi untuk mengalikan angka dengan 3

echo $double(6) . PHP_EOL; // Output: 12
echo $triple(4) . PHP_EOL; // Output: 12

/*
==========================
Soal 4
Array_map untuk mengubah array menjadi kuadrat tiap elemen
==========================
*/
$numbers = [1, 2, 3, 4];
$squared = array_map(function($n) { return $n * $n; }, $numbers);
/*
Penjelasan:
- array_map(callback, array) -> menerapkan fungsi ke tiap elemen array
- anonymous function menerima $n -> setiap elemen array
- return $n * $n -> kuadrat elemen
*/
print_r($squared); // Output: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 )

/*
==========================
Soal 5
Array_filter untuk mengambil bilangan genap
==========================
*/
$nums = [5,6,7,8,9,10];
$even = array_filter($nums, function($n) { return $n % 2 === 0; });
/*
Penjelasan:
- array_filter(array, callback) -> memfilter elemen berdasarkan fungsi callback
- callback mengembalikan true/false
- $n % 2 === 0 -> kondisi genap
*/
print_r($even); // Output: Array ( [1] => 6 [3] => 8 [5] => 10 )

/*
==========================
Soal 6
Array_reduce untuk menjumlahkan semua elemen
==========================
*/
$nums2 = [2,4,6,8];
$sum = array_reduce($nums2, function($carry, $item) { return $carry + $item; }, 0);
/*
Penjelasan:
- array_reduce(array, callback, initial) -> mengurangi array menjadi satu nilai
- $carry -> nilai akumulasi sebelumnya
- $item -> elemen array saat ini
- initial = 0 -> nilai awal akumulasi
*/
echo $sum . PHP_EOL; // Output: 20

/*
==========================
Soal 7
Fungsi executor(callable $fn, $value) yang menjalankan fungsi
==========================
*/
function executor(callable $fn, $value) {
    /*
    Penjelasan:
    - callable $fn -> memastikan parameter harus fungsi
    - return $fn($value) -> menjalankan fungsi dengan nilai $value
    */
    return $fn($value);
}

echo executor(function($x){ return $x * 10; }, 7) . PHP_EOL; // Output: 70

/*
==========================
Soal 8
Fungsi menerima fungsi lain dan menambahkan 5 ke hasilnya
==========================
*/
function addFiveToFunctionResult($fn, $value) {
    /*
    Pola:
    - Jalankan fungsi $fn($value)
    - Tambahkan 5 ke hasilnya
    */
    return $fn($value) + 5;
}

$inner = function($x){ return $x * 2; };
echo addFiveToFunctionResult($inner, 7) . PHP_EOL; // Output: 19

/*
==========================
Soal 9
Anonymous function untuk mengubah string menjadi huruf besar
==========================
*/
$toUpper = function($str){ return strtoupper($str); };
echo executor($toUpper, "hello world") . PHP_EOL; // Output: HELLO WORLD

/*
==========================
Soal 10
Higher-order function untuk menerapkan callback ke array
==========================
*/
function applyCallbackToArray($arr, $callback){
    /*
    Pola:
    - Buat array baru untuk menampung hasil
    - Iterasi tiap elemen
    - Terapkan callback
    - Tambahkan hasil ke array baru
    */
    $result = [];
    foreach($arr as $item){
        $result[] = $callback($item);
    }
    return $result;
}

$numbers3 = [1,2,3];
$tripled = applyCallbackToArray($numbers3, function($x){ return $x * 3; });
print_r($tripled); // Output: Array ( [0] => 3 [1] => 6 [2] => 9 )

/*
==========================
Kesimpulan dari 10 soal
==========================
- PHP mendukung higher-order function menggunakan anonymous function/closure
- Fungsi bisa menerima fungsi sebagai parameter (callback)
- Fungsi bisa mengembalikan fungsi lain
- Built-in array functions (map, filter, reduce) mempermudah operasi koleksi
- Type hinting callable memastikan parameter harus fungsi
- Pola umum:
    1. Tentukan fungsi atau closure
    2. Gunakan sebagai parameter callback
    3. Jalankan fungsi/closure
- Pemula belajar:
    -> Anonymous function
    -> Closure dan use()
    -> Callback
    -> Array operations
*/
?>
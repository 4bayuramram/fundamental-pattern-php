<?php

/*
Materi Ringkasan Higher-order Function PHP
File: HigherOrderFunction.php
Materi ini menjelaskan konsep Higher-order function di PHP dengan bahasa sederhana untuk pemula

Higher-order function adalah fungsi yang dapat:
1. Menerima satu atau lebih fungsi sebagai argumen
2. Mengembalikan fungsi sebagai hasil

Konsep ini umum di bahasa pemrograman fungsional, dan PHP sejak versi 5.3+ mendukung anonymous functions (closures) yang memudahkan penggunaan higher-order function.

Referensi resmi: https://www.php.net/manual/en/functions.first-class.php
*/

// jalankan file :  php php_advanced/07_HOF/01_hof.php

/*
1. Anonymous Function / Closure
Closure adalah fungsi tanpa nama yang bisa disimpan dalam variabel
*/

$greet = function($name) {
    return "Halo, $name!";
};

echo $greet("Budi"); // output: Halo, Budi!

/*
2. Higher-order function menerima fungsi sebagai parameter
Contoh: fungsi 'applyOperation' menerima fungsi lain sebagai argumen
*/

function applyOperation($a, $b, $operation) {
    return $operation($a, $b);
}

// menggunakan anonymous function sebagai parameter
$result = applyOperation(10, 5, function($x, $y) {
    return $x + $y;
});
echo $result; // output: 15

/*
3. Higher-order function mengembalikan fungsi
Fungsi dapat mengembalikan fungsi lain
*/

function multiplier($factor) {
    return function($number) use ($factor) {
        return $number * $factor;
    };
}

$double = multiplier(2);
$triple = multiplier(3);

echo $double(5); // output: 10
echo $triple(5); // output: 15

/*
4. Array functions sebagai contoh Higher-order function
PHP menyediakan banyak built-in higher-order function untuk array:
- array_map
- array_filter
- array_reduce
*/

$numbers = [1, 2, 3, 4, 5];

// array_map: transformasi setiap elemen
$squared = array_map(function($n) { return $n * $n; }, $numbers);
print_r($squared); // output: [1, 4, 9, 16, 25]

// array_filter: seleksi elemen berdasarkan kondisi
$even = array_filter($numbers, function($n) { return $n % 2 === 0; });
print_r($even); // output: [2, 4]

// array_reduce: agregasi elemen menjadi satu nilai
$sum = array_reduce($numbers, function($carry, $item) { return $carry + $item; }, 0);
echo $sum; // output: 15

/*
5. Menggunakan callable type hint
PHP memungkinkan type hinting untuk callable agar fungsi parameter wajib fungsi
*/

function executor(callable $fn, $value) {
    return $fn($value);
}

echo executor(function($x) { return $x * 10; }, 7); // output: 70

/*
6. Kesimpulan
- Higher-order function adalah fungsi yang menerima atau mengembalikan fungsi
- PHP mendukung anonymous function (closure) sejak versi 5.3
- Cocok digunakan untuk pemrograman fungsional, callback, atau operasi array
- Built-in higher-order functions seperti array_map, array_filter, array_reduce memudahkan pemrosesan koleksi
*/

?>
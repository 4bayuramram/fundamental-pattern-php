<?php

/*
php basic/10_associative_array/01_associative_array.php (for run)

Materi Ringkasan Associative Array PHP
File: AssociativeArray.php
Materi ini menjelaskan konsep associative array di PHP berdasarkan dokumentasi resmi PHP
https://www.php.net/manual/en/language.types.array.php
*/

echo "\n=== Associative Array PHP ===\n";

/*
1. Pengertian Associative Array

Associative array adalah array yang menggunakan key berupa string (atau non-integer)
untuk mengakses nilai.

Berbeda dengan indexed array yang menggunakan angka (0,1,2,...),
associative array menggunakan pasangan key => value.
*/

$person = [
    "nama" => "Budi",
    "umur" => 20,
    "kota" => "Jakarta"
];

print_r($person);

/*
2. Mengakses Nilai

Nilai diakses menggunakan key, bukan index angka
*/

echo $person["nama"] . "\n"; // Budi
echo $person["umur"] . "\n"; // 20

/*
3. Menambahkan / Mengubah Data

Jika key belum ada → akan ditambahkan
Jika key sudah ada → akan diupdate
*/

$person["pekerjaan"] = "Programmer"; // tambah
$person["umur"] = 21; // update

print_r($person);

/*
4. Menghapus Data

Gunakan unset() untuk menghapus key tertentu
*/

unset($person["kota"]);
print_r($person);

/*
5. Mengecek Key dan Value

- array_key_exists → cek key
- isset → cek key dan tidak null
- in_array → cek value
*/

if(array_key_exists("nama", $person)){
    echo "Key 'nama' ada\n";
}

if(isset($person["umur"])){
    echo "Key 'umur' ada dan tidak null\n";
}

if(in_array("Budi", $person)){
    echo "Value 'Budi' ditemukan\n";
}

/*
Perbedaan array_key_exists vs isset:
- array_key_exists → TRUE walaupun nilainya NULL
- isset → FALSE jika nilainya NULL
*/

$data = ["a" => null];

var_dump(array_key_exists("a", $data)); // true
var_dump(isset($data["a"]));            // false

/*
6. Looping Associative Array

Gunakan foreach
*/

foreach($person as $key => $value){
    echo "$key : $value\n";
}

/*
7. Fungsi yang Sering Digunakan

- array_keys → ambil semua key
- array_values → ambil semua value
*/

$keys = array_keys($person);
$values = array_values($person);

print_r($keys);
print_r($values);

/*
8. Associative Array Multidimensi

Associative array bisa bersarang (nested array)
*/

$users = [
    [
        "nama" => "Budi",
        "umur" => 20
    ],
    [
        "nama" => "Siti",
        "umur" => 22
    ]
];

print_r($users);

// akses data
echo $users[0]["nama"] . "\n"; // Budi

/*
9. Kombinasi Key (Mixed Array)

PHP mengizinkan kombinasi key string dan integer
*/

$mixed = [
    "nama" => "Andi",
    0 => "nilai1",
    1 => "nilai2"
];

print_r($mixed);

/*
10. Konversi ke JSON

Associative array sering digunakan untuk API
*/

$json = json_encode($person);
echo $json . "\n";

/*
11. Sorting Associative Array

Gunakan fungsi khusus:
- asort → sort berdasarkan value (pertahankan key)
- ksort → sort berdasarkan key
- arsort → descending by value
- krsort → descending by key
*/

$data = [
    "c" => 3,
    "a" => 1,
    "b" => 2
];

asort($data);
print_r($data);

ksort($data);
print_r($data);

/*
12. array_combine (Membuat Associative Array)

Menggabungkan dua array menjadi key => value
*/

$keys = ["nama","umur"];
$values = ["Budi", 20];

$result = array_combine($keys, $values);
print_r($result);

/*
13. Best Practice

- Gunakan nama key yang jelas dan konsisten
- Hindari typo pada key (karena PHP tidak error langsung)
- Gunakan isset atau array_key_exists sebelum akses
- Gunakan struktur nested untuk data kompleks
*/

/*
Kesimpulan

Associative array di PHP:
- Menggunakan pasangan key => value
- Key bisa berupa string atau integer
- Sangat fleksibel untuk representasi data (object-like)
- Banyak digunakan dalam API, database result, dan konfigurasi
*/

?>
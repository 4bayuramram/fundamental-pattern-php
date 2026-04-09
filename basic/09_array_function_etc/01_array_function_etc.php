<?php

/*
php basic/09_array_function_etc/01_array_function_etc.php (for run)

Materi Ringkasan Array Functions PHP
File: ArrayFunctions.php
Materi ini menjelaskan fungsi-fungsi array di PHP berdasarkan dokumentasi resmi PHP
*/

echo "\n=== Array Functions PHP ===\n";

/*
1. array_map
Menerapkan callback ke setiap elemen array dan mengembalikan array baru
*/

$numbers = [1, 2, 3, 4];
$squared = array_map(function($n){
    return $n * $n;
}, $numbers);

print_r($squared); // [1, 4, 9, 16]

/*
2. array_filter
Menyaring elemen array berdasarkan callback yang menghasilkan TRUE
*/

$nums = [1, 2, 3, 4, 5, 6];
$even = array_filter($nums, function($n){
    return $n % 2 == 0;
});

print_r($even); // [2, 4, 6]

/*
3. array_reduce
Mengurangi array menjadi satu nilai tunggal menggunakan callback
*/

$sum = array_reduce($nums, function($carry, $item){
    return $carry + $item;
}, 0);

echo $sum; // 21

/*
4. array_walk / array_walk_recursive
Menjalankan callback pada setiap elemen array. Tidak mengembalikan array baru.
*/

$fruits = ["apel", "jeruk", "mangga"];
array_walk($fruits, function(&$value, $key){
    $value = strtoupper($value);
});

print_r($fruits); // ["APEL", "JERUK", "MANGGA"]

/*
5. array_merge
Menggabungkan satu atau lebih array
*/

$arr1 = ["a", "b"];
$arr2 = ["c", "d"];
$merged = array_merge($arr1, $arr2);

print_r($merged); // ["a", "b", "c", "d"]

/*
6. array_slice
Mengambil sebagian array
*/

$letters = ["a","b","c","d","e"];
$subset = array_slice($letters, 1, 3); // mulai indeks 1, ambil 3 elemen

print_r($subset); // ["b","c","d"]

/*
7. array_key_exists
Cek apakah key tertentu ada dalam array
*/

$person = ["nama"=>"Budi", "umur"=>20];
if(array_key_exists("nama", $person)){
    echo "Key 'nama' ada\n";
}

/*
8. in_array
Cek apakah value ada dalam array
*/

if(in_array("Budi", $person)){
    echo "Value 'Budi' ada\n";
}

/*
9. array_keys / array_values
Mengambil semua key atau value dari array
*/

$keys = array_keys($person);
$values = array_values($person);

print_r($keys);   // ["nama", "umur"]
print_r($values); // ["Budi", 20]

/*
10. sort / rsort / asort / ksort
Fungsi untuk mengurutkan array
*/

$nums = [4, 2, 8, 1];
sort($nums); // ascending
print_r($nums); // [1, 2, 4, 8]

rsort($nums); // descending
print_r($nums); // [8, 4, 2, 1]

/*
11. array_unique
Menghapus elemen yang sama
*/

$dupes = [1,2,2,3,1];
$unique = array_unique($dupes);
print_r($unique); // [1,2,3]

/*
12. array_search
Mencari key berdasarkan value
*/

$fruits = ["apel","jeruk","mangga"];
$key = array_search("jeruk", $fruits);
echo $key; // 1

/*
13. array_combine
Menggabungkan dua array menjadi key => value
*/

$keys = ["nama","umur"];
$values = ["Budi", 20];
$combined = array_combine($keys, $values);
print_r($combined); // ["nama"=>"Budi","umur"=>20]

/*
Kesimpulan
PHP menyediakan banyak fungsi array bawaan:
- array_map, array_filter, array_reduce → transformasi dan manipulasi
- array_merge, array_slice → penggabungan dan potongan
- sort, rsort, asort, ksort → pengurutan
- array_keys, array_values, array_key_exists, in_array → pemeriksaan dan akses
- array_unique, array_search, array_combine → manipulasi lanjutan
*/

?>
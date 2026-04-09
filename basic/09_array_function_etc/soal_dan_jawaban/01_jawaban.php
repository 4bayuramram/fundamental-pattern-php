<?php
/*
File: jawaban.php
Deskripsi:
File ini berisi jawaban untuk 10 soal PHP Array Functions.
Setiap soal dijawab dengan kode PHP yang bisa dijalankan langsung.
Setiap jawaban dilengkapi komentar penjelasan sintaks, pola penyelesaian, dan output yang akan muncul.
Tujuan: Membantu pemula memahami cara kerja array functions di PHP.
*/

// php basic/09_array_function_etc/soal_dan_jawaban/01_jawaban.php (for run)
/* 
===========================================
Soal 1: array_map
===========================================
*/
echo "\n=== Soal 1 ===\n";

/*
Pola Jawaban:
1. Buat array angka.
2. Gunakan array_map dengan callback function.
3. Callback function menerima tiap elemen dan mengembalikan kuadratnya.
4. Simpan hasil di variabel baru.
*/

$angka = [1, 2, 3, 4, 5]; // array awal
$kuadrat = array_map(function($n){
    return $n * $n; // mengalikan elemen dengan dirinya sendiri
}, $angka);

print_r($kuadrat); // Output: [1, 4, 9, 16, 25]

/* 
Penjelasan:
- array_map(callback, array) akan membuat array baru.
- Callback function bisa berupa anonymous function atau nama fungsi.
- Cocok untuk transformasi tiap elemen array.
*/


/* 
===========================================
Soal 2: array_filter
===========================================
*/
echo "\n=== Soal 2 ===\n";

$nilai = [10, 15, 20, 25, 30];
$genap = array_filter($nilai, function($n){
    return $n % 2 == 0; // hanya elemen genap
});

print_r($genap); // Output: [10, 20, 30]

/*
Penjelasan:
- array_filter(array, callback) menyaring elemen berdasarkan callback.
- Callback harus mengembalikan TRUE untuk menyimpan elemen.
- Cocok untuk seleksi data dalam array.
*/


/* 
===========================================
Soal 3: array_reduce
===========================================
*/
echo "\n=== Soal 3 ===\n";

$angka = [1, 2, 3, 4, 5];
$total = array_reduce($angka, function($carry, $item){
    return $carry + $item; // menjumlahkan semua elemen
}, 0);

echo $total; // Output: 15

/*
Penjelasan:
- array_reduce(array, callback, initial) mengurangi array menjadi satu nilai.
- $carry menyimpan hasil sementara, $item adalah elemen saat ini.
- Cocok untuk sum, product, atau agregasi array.
*/


/* 
===========================================
Soal 4: array_walk
===========================================
*/
echo "\n=== Soal 4 ===\n";

$buah = ["apel", "jeruk", "mangga"];
array_walk($buah, function(&$value, $key){
    $value = strtoupper($value); // ubah tiap elemen menjadi huruf besar
});

print_r($buah); // Output: ["APEL","JERUK","MANGGA"]

/*
Penjelasan:
- array_walk(array, callback) menerapkan fungsi ke setiap elemen.
- Menggunakan & sebelum $value agar array asli diubah.
- Cocok untuk modifikasi array langsung.
*/


/* 
===========================================
Soal 5: array_merge
===========================================
*/
echo "\n=== Soal 5 ===\n";

$arr1 = ["a","b"];
$arr2 = ["c","d"];
$hasilGabung = array_merge($arr1, $arr2);

print_r($hasilGabung); // Output: ["a","b","c","d"]

/*
Penjelasan:
- array_merge menggabungkan satu atau lebih array.
- Menghasilkan array baru.
- Index numerik akan direset, index string akan digabungkan.
*/


/* 
===========================================
Soal 6: array_slice
===========================================
*/
echo "\n=== Soal 6 ===\n";

$huruf = ["a","b","c","d","e"];
$subset = array_slice($huruf, 1, 3); // mulai dari indeks 1, ambil 3 elemen

print_r($subset); // Output: ["b","c","d"]

/*
Penjelasan:
- array_slice(array, start, length) mengambil sebagian array.
- Cocok untuk pagination, subset data, atau mengambil elemen tertentu.
*/


/* 
===========================================
Soal 7: array_key_exists
===========================================
*/
echo "\n=== Soal 7 ===\n";

$data = ["nama"=>"Budi","umur"=>20];
$cekKey = array_key_exists("umur", $data);

var_dump($cekKey); // Output: bool(true)

/*
Penjelasan:
- array_key_exists(key, array) mengecek apakah key ada di array.
- Mengembalikan TRUE/FALSE.
- Cocok untuk validasi sebelum akses elemen.
*/


/* 
===========================================
Soal 8: in_array
===========================================
*/
echo "\n=== Soal 8 ===\n";

$cekValue = in_array("Budi", $data);

var_dump($cekValue); // Output: bool(true)

/*
Penjelasan:
- in_array(value, array) mengecek apakah value ada di array.
- Mengembalikan TRUE/FALSE.
- Cocok untuk mencari data tanpa tahu index/key.
*/


/* 
===========================================
Soal 9: sort
===========================================
*/
echo "\n=== Soal 9 ===\n";

$nilai = [3, 1, 4, 2];
sort($nilai); // urut ascending

print_r($nilai); // Output: [1,2,3,4]

/*
Penjelasan:
- sort(array) mengurutkan array ascending.
- Untuk descending gunakan rsort().
- Cocok untuk menyiapkan data sebelum looping atau display.
*/


/* 
===========================================
Soal 10: array_combine
===========================================
*/
echo "\n=== Soal 10 ===\n";

$keys = ["nama","umur"];
$values = ["Andi",25];
$dataBaru = array_combine($keys, $values);

print_r($dataBaru); // Output: ["nama"=>"Andi","umur"=>25]

/*
Penjelasan:
- array_combine(keys_array, values_array) membuat array assosiatif.
- Jumlah elemen keys dan values harus sama.
- Cocok untuk membuat mapping key => value dari dua array.
*/


/*
===========================================
Kesimpulan
===========================================
1. array_map: transformasi elemen array menjadi array baru.
2. array_filter: menyaring elemen array berdasarkan kondisi.
3. array_reduce: mengurangi array menjadi satu nilai.
4. array_walk: memodifikasi array langsung dengan callback.
5. array_merge: menggabungkan beberapa array menjadi satu.
6. array_slice: mengambil sebagian elemen array.
7. array_key_exists: mengecek keberadaan key di array.
8. in_array: mengecek keberadaan value di array.
9. sort: mengurutkan array.
10. array_combine: membuat array assosiatif dari dua array.

Dengan mempelajari contoh ini, pemula bisa:
- Memahami pola penggunaan array functions.
- Mengetahui perbedaan array_map, array_filter, array_reduce.
- Mengetahui cara memodifikasi array langsung vs membuat array baru.
- Memahami validasi key/value sebelum akses.
*/

?>
<?php

/*
File: jawaban.php

Deskripsi:
File ini berisi jawaban dari 10 soal latihan Associative Array PHP.
Setiap soal dilengkapi dengan:
- Penjelasan konsep
- Penjelasan syntax
- Pola penyelesaian
- Output yang dihasilkan

Tujuan:
Membantu pemula memahami associative array secara bertahap dan praktis.
*/

// php basic/10_associative_array/soal_dan_jawaban/01_jawaban.php (for run )

echo "\n=== JAWABAN ASSOCIATIVE ARRAY PHP ===\n\n";

/*
==================================================
SOAL 1: Membuat Associative Array
==================================================

Pola:
- Gunakan tanda [] untuk membuat array
- Gunakan format key => value
*/

$mahasiswa = [
    "nama" => "Andi",
    "umur" => 21,
    "jurusan" => "Informatika"
];

// Menampilkan seluruh isi array
print_r($mahasiswa);

/*
Penjelasan syntax:
- $mahasiswa = [...] → membuat array
- "nama" => "Andi" → pasangan key dan value
- print_r() → menampilkan isi array secara lengkap

Output:
Array
(
    [nama] => Andi
    [umur] => 21
    [jurusan] => Informatika
)
*/

echo "\n----------------------------------\n";

/*
==================================================
SOAL 2: Mengakses Nilai
==================================================

Pola:
- Gunakan $array["key"]
*/

echo $mahasiswa["nama"] . "\n";
echo $mahasiswa["jurusan"] . "\n";

/*
Penjelasan:
- $mahasiswa["nama"] → ambil value dari key "nama"
- . "\n" → pindah baris

Output:
Andi
Informatika
*/

echo "\n----------------------------------\n";

/*
==================================================
SOAL 3: Menambahkan Data
==================================================

Pola:
- Tambahkan dengan $array["key"] = value
*/

$mahasiswa["ipk"] = 3.8;
print_r($mahasiswa);

/*
Penjelasan:
- Jika key belum ada, maka akan ditambahkan

Output tambahan:
[ipk] => 3.8
*/

echo "\n----------------------------------\n";

/*
==================================================
SOAL 4: Mengubah Data
==================================================

Pola:
- Gunakan key yang sama untuk overwrite
*/

$mahasiswa["umur"] = 22;
print_r($mahasiswa);

/*
Penjelasan:
- Nilai lama akan diganti dengan nilai baru

Output:
[umur] => 22
*/

echo "\n----------------------------------\n";

/*
==================================================
SOAL 5: Menghapus Data
==================================================

Pola:
- Gunakan unset()
*/

unset($mahasiswa["jurusan"]);
print_r($mahasiswa);

/*
Penjelasan:
- unset() menghapus elemen array berdasarkan key

Output:
"jurusan" tidak ada lagi
*/

echo "\n----------------------------------\n";

/*
==================================================
SOAL 6: Cek Key
==================================================

Pola:
- Gunakan array_key_exists()
*/

if (array_key_exists("nama", $mahasiswa)) {
    echo "Key 'nama' ada\n";
}

/*
Penjelasan:
- Mengecek apakah key tersedia di array

Output:
Key 'nama' ada
*/

echo "\n----------------------------------\n";

/*
==================================================
SOAL 7: Cek Value
==================================================

Pola:
- Gunakan in_array()
*/

if (in_array("Andi", $mahasiswa)) {
    echo "Value 'Andi' ditemukan\n";
}

/*
Penjelasan:
- Mencari value dalam array

Output:
Value 'Andi' ditemukan
*/

echo "\n----------------------------------\n";

/*
==================================================
SOAL 8: Looping Array
==================================================

Pola:
- Gunakan foreach
*/

foreach ($mahasiswa as $key => $value) {
    echo "$key : $value\n";
}

/*
Penjelasan:
- $key → nama key
- $value → isi

Output:
nama : Andi
umur : 22
ipk : 3.8
*/

echo "\n----------------------------------\n";

/*
==================================================
SOAL 9: Array Multidimensi
==================================================

Pola:
- Array di dalam array
*/

$users = [
    ["nama" => "Budi", "umur" => 20],
    ["nama" => "Siti", "umur" => 22]
];

echo $users[1]["nama"] . "\n";

/*
Penjelasan:
- Index 1 = data ke-2
- ["nama"] ambil key

Output:
Siti
*/

echo "\n----------------------------------\n";

/*
==================================================
SOAL 10: array_combine
==================================================

Pola:
- Gabungkan dua array
*/

$keys = ["nama", "umur"];
$values = ["Rina", 19];

$hasil = array_combine($keys, $values);
print_r($hasil);

/*
Penjelasan:
- Key diambil dari array pertama
- Value dari array kedua

Output:
Array
(
    [nama] => Rina
    [umur] => 19
)
*/

echo "\n----------------------------------\n";

/*
==================================================
KESIMPULAN AKHIR
==================================================

Dari latihan ini, kita memahami:

1. Associative array menggunakan key => value
2. Akses data menggunakan key, bukan index angka
3. Data bisa ditambah, diubah, dan dihapus
4. Banyak fungsi bawaan PHP untuk manipulasi array
5. foreach sangat penting untuk looping
6. Array bisa bersarang (multidimensi)
7. array_combine berguna untuk membuat struktur data

Pola utama:
- $array["key"] → akses data
- foreach → looping
- fungsi bawaan → manipulasi

Kesimpulan:
Associative array adalah struktur data penting di PHP
yang sering digunakan untuk:
- Data user
- API (JSON)
- Database

Jika memahami file ini, maka kamu sudah menguasai dasar penting PHP 🚀

*/

?>
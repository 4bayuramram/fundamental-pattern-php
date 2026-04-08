<?php

/*
File: jawaban.php
Berisi jawaban 10 soal Control Flow PHP
jalankan file : php basic/05_control_flow/soal_dan_jawaban/01_jawaban.php
Setiap soal dilengkapi:
- Penjelasan
- Pola penyelesaian
- Output
*/

// =====================
// 1. IF sederhana
// =====================
$nilai = 80;

// cek kondisi >= 75
if ($nilai >= 75) {
    echo "1. Lulus\n";
}

/*
Penjelasan:
- if digunakan untuk mengecek kondisi
- operator >= artinya lebih besar atau sama dengan
Pola:
- tentukan variabel
- buat kondisi
Output: Lulus
*/


// =====================
// 2. IF ELSE
// =====================
$umur = 17;

if ($umur >= 18) {
    echo "2. Dewasa\n";
} else {
    echo "2. Anak\n";
}

/*
Penjelasan:
- else dijalankan jika kondisi salah
Pola:
- gunakan if untuk kondisi utama
- else untuk alternatif
Output: Anak
*/


// =====================
// 3. IF ELSEIF
// =====================
$nilai2 = 85;

if ($nilai2 >= 90) {
    echo "3. A\n";
} elseif ($nilai2 >= 80) {
    echo "3. B\n";
} elseif ($nilai2 >= 70) {
    echo "3. C\n";
} else {
    echo "3. D\n";
}

/*
Penjelasan:
- elseif untuk banyak kondisi
Pola:
- urutkan dari nilai terbesar
Output: B
*/


// =====================
// 4. Nested IF
// =====================
$login = true;
$role = "admin";

if ($login) {
    if ($role == "admin") {
        echo "4. Akses diterima\n";
    }
}

/*
Penjelasan:
- if di dalam if disebut nested
Pola:
- cek kondisi utama dulu
- lanjut kondisi kedua
Output: Akses diterima
*/


// =====================
// 5. SWITCH
// =====================
$hari = "Minggu";

switch ($hari) {
    case "Senin":
    case "Selasa":
    case "Rabu":
    case "Kamis":
    case "Jumat":
        echo "5. Hari kerja\n";
        break;
    case "Sabtu":
    case "Minggu":
        echo "5. Libur\n";
        break;
}

/*
Penjelasan:
- switch cocok untuk banyak nilai tetap
- break menghentikan pengecekan
Output: Libur
*/


// =====================
// 6. SWITCH tanpa break
// =====================
$angka = 1;

switch ($angka) {
    case 1:
        echo "6. Satu ";
    case 2:
        echo "Dua\n";
}

/*
Penjelasan:
- tanpa break akan lanjut ke case berikutnya
Output: Satu Dua
*/


// =====================
// 7. TERNARY
// =====================
$umur2 = 20;

$status = ($umur2 >= 18) ? "Dewasa" : "Anak";
echo "7. $status\n";

/*
Penjelasan:
- bentuk singkat if else
Pola:
(kondisi) ? benar : salah
Output: Dewasa
*/


// =====================
// 8. NULL COALESCING
// =====================
$username = $_GET['username'] ?? "Guest";

echo "8. $username\n";

/*
Penjelasan:
- ?? untuk default value
Output: Guest (jika tidak ada input)
*/


// =====================
// 9. GENAP GANJIL
// =====================
$bil = 5;

if ($bil % 2 == 0) {
    echo "9. Genap\n";
} else {
    echo "9. Ganjil\n";
}

/*
Penjelasan:
- % adalah modulus (sisa bagi)
Pola:
- jika sisa 0 = genap
Output: Ganjil
*/


// =====================
// 10. GABUNGAN
// =====================
$nilai3 = 88;

// kelulusan
if ($nilai3 >= 75) {
    echo "10. Lulus ";
} else {
    echo "10. Tidak Lulus ";
}

// grade
if ($nilai3 >= 90) {
    echo "A\n";
} elseif ($nilai3 >= 80) {
    echo "B\n";
} elseif ($nilai3 >= 70) {
    echo "C\n";
} else {
    echo "D\n";
}

/*
Penjelasan:
- gabungkan beberapa kondisi
Output: Lulus B
*/


/*
KESIMPULAN:
- if digunakan untuk logika dasar
- elseif untuk banyak kondisi
- switch untuk nilai tetap
- ternary untuk singkat
- null coalescing untuk default
- memahami pola kondisi adalah kunci
*/

?>

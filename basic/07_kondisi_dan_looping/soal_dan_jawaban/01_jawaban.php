<?php
/*

php basic/07_kondisi_dan_looping/soal_dan_jawaban/01_jawaban.php (for run )

File: jawaban.php
Materi: Jawaban 10 Soal PHP Conditional + Looping
Tujuan: File ini membantu pemula belajar PHP dengan:
- Menampilkan output di terminal atau CLI
- Memberikan penjelasan detil setiap soal
- Menunjukkan pola cara menyelesaikan soal
- Memahami conditional, looping, array, ternary, break, continue, nested loop
*/


// ==========================
// Soal 1
// ==========================
/*
Soal 1:
Buat variabel $umur = 18 dan gunakan if-else untuk menampilkan
"Dewasa" jika umur >= 17, dan "Belum Dewasa" jika < 17

Penjelasan:
- Variabel di PHP selalu diawali $.
- If-else untuk memeriksa kondisi.
- Operator >= untuk membandingkan angka.
- echo menampilkan hasil ke terminal.
- Pola: baca soal -> identifikasi kondisi -> implementasikan if-else.
*/

$umur = 18;

if ($umur >= 17) {
    echo "Soal 1 Output: Dewasa" . PHP_EOL; // Output: Dewasa
} else {
    echo "Soal 1 Output: Belum Dewasa" . PHP_EOL;
}


// ==========================
// Soal 2
// ==========================
/*
Soal 2:
Variabel $hari = "Rabu", gunakan switch-case untuk menampilkan
"Hari kerja" untuk Senin s/d Jumat, "Akhir minggu" untuk Sabtu & Minggu

Penjelasan:
- Switch-case lebih rapi untuk banyak kondisi nilai tunggal.
- break menghentikan eksekusi case selanjutnya.
- Default menangani kondisi di luar semua case.
- Pola: tentukan nilai, cek kategori, pilih output.
*/

$hari = "Rabu";

switch ($hari) {
    case "Senin":
    case "Selasa":
    case "Rabu":
    case "Kamis":
    case "Jumat":
        echo "Soal 2 Output: Hari kerja" . PHP_EOL; // Output: Hari kerja
        break;
    case "Sabtu":
    case "Minggu":
        echo "Soal 2 Output: Akhir minggu" . PHP_EOL;
        break;
    default:
        echo "Soal 2 Output: Hari tidak diketahui" . PHP_EOL;
}


// ==========================
// Soal 3
// ==========================
/*
Soal 3:
For loop dari 1 sampai 10, tampilkan angka

Penjelasan:
- For loop: for(initial; kondisi; increment)
- $i=1 start, $i<=10 kondisi, $i++ increment
- echo menampilkan output ke terminal
- Pola: identifikasi range -> tulis for -> tampilkan setiap iterasi
*/

echo "Soal 3 Output: ";
for ($i = 1; $i <= 10; $i++) {
    echo $i . " "; // Output: 1 2 3 ... 10
}
echo PHP_EOL;


// ==========================
// Soal 4
// ==========================
/*
Soal 4:
While loop menampilkan angka genap 2-10

Penjelasan:
- While loop mengecek kondisi di awal
- $j=2 start genap, $j<=10 kondisi, $j+=2 increment genap
- Pola: tentukan start -> buat kondisi -> tambahkan increment sesuai pola
*/

echo "Soal 4 Output: ";
$j = 2;
while ($j <= 10) {
    echo $j . " "; // Output: 2 4 6 8 10
    $j += 2;
}
echo PHP_EOL;


// ==========================
// Soal 5
// ==========================
/*
Soal 5:
Do-while loop menampilkan angka 1-5

Penjelasan:
- Do-while: blok dijalankan dulu, kondisi dicek belakangan
- Cocok jika minimal eksekusi 1 kali
- Pola: tentukan start -> do { aksi } while(kondisi)
*/

echo "Soal 5 Output: ";
$k = 1;
do {
    echo $k . " "; // Output: 1 2 3 4 5
    $k++;
} while ($k <= 5);
echo PHP_EOL;


// ==========================
// Soal 6
// ==========================
/*
Soal 6:
Array $buah = ["apel","jeruk","mangga"], tampilkan dengan foreach

Penjelasan:
- Array menampung banyak nilai
- Foreach digunakan untuk looping array
- $item menampung elemen saat ini
- Pola: buat array -> foreach elemen -> echo
*/

$buah = ["apel", "jeruk", "mangga"];
echo "Soal 6 Output: ";
foreach ($buah as $item) {
    echo $item . " "; // Output: apel jeruk mangga
}
echo PHP_EOL;


// ==========================
// Soal 7
// ==========================
/*
Soal 7:
For loop 1-10, gunakan break saat angka = 6

Penjelasan:
- Break menghentikan loop segera saat kondisi terpenuhi
- Pola: buat loop -> cek kondisi break -> echo sebelum break
*/

echo "Soal 7 Output: ";
for ($x = 1; $x <= 10; $x++) {
    if ($x == 6) {
        break;
    }
    echo $x . " "; // Output: 1 2 3 4 5
}
echo PHP_EOL;


// ==========================
// Soal 8
// ==========================
/*
Soal 8:
For loop 1-5, skip angka 3 menggunakan continue

Penjelasan:
- Continue melewatkan iterasi saat kondisi terpenuhi
- Loop tetap berjalan untuk iterasi berikutnya
- Pola: buat loop -> cek kondisi continue -> echo jika bukan skip
*/

echo "Soal 8 Output: ";
for ($y = 1; $y <= 5; $y++) {
    if ($y == 3) {
        continue;
    }
    echo $y . " "; // Output: 1 2 4 5
}
echo PHP_EOL;


// ==========================
// Soal 9
// ==========================
/*
Soal 9:
Nested loop, outer 1-3, inner 1-2, tampilkan kombinasi

Penjelasan:
- Nested loop: loop di dalam loop
- Outer mengontrol baris, inner mengontrol kolom
- Pola: buat outer loop -> buat inner loop -> echo kombinasi
*/

echo "Soal 9 Output: ";
for ($m = 1; $m <= 3; $m++) {
    for ($n = 1; $n <= 2; $n++) {
        echo "Outer=$m,Inner=$n "; // Output: kombinasi m,n
    }
}
echo PHP_EOL;


// ==========================
// Soal 10
// ==========================
/*
Soal 10:
Variabel $angka = 7, tampilkan Genap/Ganjil pakai ternary

Penjelasan:
- Ternary operator: singkat if-else
- Format: kondisi ? true : false
- % modulo cek sisa bagi
- Pola: tentukan kondisi -> implementasikan ternary -> echo
*/

$angka = 7;
echo "Soal 10 Output: ";
echo ($angka % 2 == 0) ? "Genap" . PHP_EOL : "Ganjil" . PHP_EOL; // Output: Ganjil


// ==========================
// Kesimpulan
// ==========================
/*
Kesimpulan dari 10 soal:
1. Conditional (if-else, switch, ternary) digunakan untuk pengambilan keputusan.
2. Looping (for, while, do-while, foreach) digunakan untuk perulangan.
3. Break menghentikan loop, continue melewatkan iterasi tertentu.
4. Nested loop memungkinkan kombinasi atau pola lebih kompleks.
5. Pemula belajar cara membaca soal, menentukan logika, menulis kode PHP.
6. Pola umum: baca soal -> identifikasi tipe -> buat variabel -> implementasi -> cek output.
7. File ini menampilkan output langsung di terminal menggunakan PHP_EOL, sehingga mudah dibaca.
*/
?>
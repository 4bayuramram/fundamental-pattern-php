<?php
/*
File: jawaban.php
Deskripsi: Jawaban lengkap 10 soal latihan looping PHP untuk pemula
Setiap soal memiliki komentar penjelasan panjang, cara menyelesaikan, serta output yang muncul.

php basic/06_looping/soal_dan_jawaban/01_jawaban.php (for run)
*/

/* =========================================================
SOAL 1: FOR Loop Sederhana
Tujuan: Menampilkan angka 1 sampai 10 menggunakan for loop
============================================================ */

/*
Penjelasan:
- for loop digunakan jika kita tahu jumlah iterasi (perulangan)
- Sintaks: for(initialisasi; kondisi; increment/decrement)
- $i = 1 -> inisialisasi variabel counter
- $i <= 10 -> kondisi perulangan, selama true blok akan dijalankan
- $i++ -> increment, menambah $i 1 setiap loop
- echo digunakan untuk menampilkan output di terminal
Output yang diharapkan:
1
2
3
4
5
6
7
8
9
10
*/

echo "=== Soal 1 ===\n";
for($i = 1; $i <= 10; $i++){
    echo "$i\n";
}

/* =========================================================
SOAL 2: WHILE Loop Sederhana
Tujuan: Menampilkan angka ganjil dari 1 sampai 9
============================================================ */

/*
Penjelasan:
- while loop cocok digunakan ketika jumlah iterasi tidak diketahui pasti
- Loop akan terus berjalan selama kondisi bernilai true
- $j = 1 -> inisialisasi counter
- $j <= 9 -> kondisi
- $j += 2 -> menambah 2 setiap iterasi agar hanya ganjil
- echo menampilkan output
Output yang diharapkan:
1
3
5
7
9
*/

echo "\n=== Soal 2 ===\n";
$j = 1;
while($j <= 9){
    echo "$j\n";
    $j += 2;
}

/* =========================================================
SOAL 3: DO...WHILE Loop
Tujuan: Menampilkan angka dari 5 sampai 1 (turun)
============================================================ */

/*
Penjelasan:
- do...while memastikan blok kode dijalankan minimal sekali
- Kemudian kondisi diperiksa setelah eksekusi
- $k = 5 -> start dari 5
- $k >= 1 -> loop turun sampai 1
- $k-- -> decrement, mengurangi 1 setiap iterasi
Output yang diharapkan:
5
4
3
2
1
*/

echo "\n=== Soal 3 ===\n";
$k = 5;
do {
    echo "$k\n";
    $k--;
} while($k >= 1);

/* =========================================================
SOAL 4: FOREACH Loop – Array
Tujuan: Menampilkan elemen array ["PHP", "HTML", "CSS"]
============================================================ */

/*
Penjelasan:
- foreach digunakan untuk array/objek, lebih mudah daripada for manual
- $item adalah variabel untuk setiap elemen array
- echo menampilkan setiap elemen
Output yang diharapkan:
PHP
HTML
CSS
*/

echo "\n=== Soal 4 ===\n";
$web = ["PHP", "HTML", "CSS"];
foreach($web as $item){
    echo "$item\n";
}

/* =========================================================
SOAL 5: FOREACH Loop dengan Key dan Value
Tujuan: Menampilkan key dan value dari array asosiatif
============================================================ */

/*
Penjelasan:
- Array asosiatif memiliki key dan value
- Sintaks: foreach($array as $key => $value)
- echo menampilkan format "key : value"
Output yang diharapkan:
nama : Budi
umur : 20
kota : Jakarta
*/

echo "\n=== Soal 5 ===\n";
$profile = ["nama"=>"Budi", "umur"=>20, "kota"=>"Jakarta"];
foreach($profile as $key => $value){
    echo "$key : $value\n";
}

/* =========================================================
SOAL 6: BREAK
Tujuan: Hentikan loop for dari 1 sampai 10 ketika mencapai angka 7
============================================================ */

/*
Penjelasan:
- break menghentikan loop saat kondisi tertentu
- Jika $i == 7, loop berhenti dan tidak mengeksekusi sisa iterasi
Output yang diharapkan:
1 2 3 4 5 6
*/

echo "\n=== Soal 6 ===\n";
for($i = 1; $i <= 10; $i++){
    if($i == 7){
        break;
    }
    echo "$i ";
}
echo "\n";

/* =========================================================
SOAL 7: CONTINUE
Tujuan: Lewati angka genap dalam for loop 1 sampai 10
============================================================ */

/*
Penjelasan:
- continue melewati iterasi saat ini dan melanjutkan ke iterasi berikutnya
- Jika $i genap ($i % 2 == 0), echo dilewati
Output yang diharapkan:
1 3 5 7 9
*/

echo "\n=== Soal 7 ===\n";
for($i = 1; $i <= 10; $i++){
    if($i % 2 == 0){
        continue;
    }
    echo "$i ";
}
echo "\n";

/* =========================================================
SOAL 8: Nested Loop
Tujuan: Menampilkan koordinat (i,j) i=1..3, j=1..3
============================================================ */

/*
Penjelasan:
- Nested loop = loop di dalam loop
- Loop luar mengontrol i, loop dalam mengontrol j
- Menampilkan format (i,j) untuk setiap kombinasi
Output yang diharapkan:
(1,1) (1,2) (1,3)
(2,1) (2,2) (2,3)
(3,1) (3,2) (3,3)
*/

echo "\n=== Soal 8 ===\n";
for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= 3; $j++){
        echo "($i,$j) ";
    }
    echo "\n";
}

/* =========================================================
SOAL 9: Loop Penjumlahan
Tujuan: Menjumlahkan angka dari 1 sampai 100 menggunakan while loop
============================================================ */

/*
Penjelasan:
- Inisialisasi $sum=0 untuk menampung total
- $n = 1 sebagai counter
- Selama $n <= 100, tambahkan $n ke $sum, increment $n
- echo menampilkan total akhir
Output yang diharapkan:
Total: 5050
*/

echo "\n=== Soal 9 ===\n";
$sum = 0;
$n = 1;
while($n <= 100){
    $sum += $n;
    $n++;
}
echo "Total: $sum\n";

/* =========================================================
SOAL 10: Loop Array dan Kondisi
Tujuan: Tampilkan semua buah, tapi skip 'jeruk'
============================================================ */

/*
Penjelasan:
- foreach untuk array buah
- Jika $item == 'jeruk', gunakan continue untuk skip
- echo menampilkan buah lainnya
Output yang diharapkan:
apel
mangga
pisang
*/

echo "\n=== Soal 10 ===\n";
$buah = ["apel", "jeruk", "mangga", "pisang"];
foreach($buah as $item){
    if($item == "jeruk"){
        continue;
    }
    echo "$item\n";
}

/* =========================================================
KESIMPULAN
============================================================ */
/*
- FOR: untuk iterasi dengan jumlah diketahui
- WHILE: untuk iterasi dengan kondisi fleksibel
- DO...WHILE: dijalankan minimal sekali
- FOREACH: khusus array/objek, lebih mudah
- BREAK: hentikan loop saat kondisi tertentu
- CONTINUE: lewati iterasi saat kondisi tertentu
- Nested loop: loop di dalam loop untuk kombinasi
- Menjumlahkan angka: loop + accumulator
- Kondisi di dalam loop: menggunakan if + continue/break
- Pemula belajar: membaca komentar panjang akan memahami pola cara menggunakan looping
*/

?>
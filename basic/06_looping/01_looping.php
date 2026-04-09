<?php

/*
Materi Ringkasan Looping PHP
File: Looping.php
Materi ini menjelaskan dasar-dasar perulangan (looping) di PHP 
dengan bahasa sederhana untuk pemula.

Looping adalah cara untuk menjalankan blok kode berulang kali
selama kondisi tertentu terpenuhi. PHP menyediakan beberapa jenis loop:
1. for
2. while
3. do...while
4. foreach (untuk array)

PHP juga mendukung keyword break dan continue untuk mengontrol loop.

 php basic/06_looping/01_looping.php  (for run)
*/


/*
1. Perulangan FOR
Loop for digunakan jika jumlah iterasi sudah diketahui sebelumnya.
Format:
for(initialisasi; kondisi; increment/decrement){
    // blok kode yang dijalankan setiap iterasi
}
*/

echo "=== Contoh FOR ===\n";

for($i = 1; $i <= 5; $i++){
    echo "Perulangan ke-$i\n";
}


/*
2. Perulangan WHILE
Loop while digunakan ketika jumlah iterasi belum diketahui sebelumnya.
Loop akan berjalan selama kondisi bernilai true.
Format:
while(kondisi){
    // blok kode
}
*/

echo "=== Contoh WHILE ===\n";

$j = 1;
while($j <= 5){
    echo "Perulangan ke-$j\n";
    $j++;
}


/*
3. Perulangan DO...WHILE
Sama seperti while, tetapi blok kode dijalankan minimal 1 kali
karena pengecekan kondisi dilakukan setelah eksekusi blok kode.
Format:
do{
    // blok kode
} while(kondisi);
*/

echo "=== Contoh DO...WHILE ===\n";

$k = 1;
do {
    echo "Perulangan ke-$k\n";
    $k++;
} while($k <= 5);


/*
4. Perulangan FOREACH
Digunakan khusus untuk array atau objek. 
Loop akan mengeksekusi blok kode untuk setiap elemen.
Format:
foreach($array as $value){
    // blok kode
}

Atau jika ingin mendapatkan key dan value:
foreach($array as $key => $value){
    // blok kode
}
*/

echo "=== Contoh FOREACH ===\n";

$buah = ["apel", "jeruk", "mangga"];

// Mengakses value saja
foreach($buah as $item){
    echo "Buah: $item\n";
}

// Mengakses key dan value
foreach($buah as $index => $item){
    echo "Index $index : $item\n";
}


/*
5. BREAK dan CONTINUE
- break: menghentikan loop saat ini
- continue: melewati iterasi saat ini dan melanjutkan ke iterasi berikutnya
*/

echo "=== Contoh BREAK dan CONTINUE ===\n";

// BREAK
for($i = 1; $i <= 10; $i++){
    if($i == 6){
        break; // keluar dari loop saat i = 6
    }
    echo "$i ";
}
echo "\n";

// CONTINUE
for($i = 1; $i <= 5; $i++){
    if($i % 2 == 0){
        continue; // melewati angka genap
    }
    echo "$i ";
}
echo "\n";


/*
6. Nested Loop
Loop di dalam loop disebut nested loop. Berguna untuk membuat tabel, pola, dll.
*/

echo "=== Contoh Nested Loop ===\n";

for($i = 1; $i <= 3; $i++){
    for($j = 1; $j <= 3; $j++){
        echo "($i,$j) ";
    }
    echo "\n";
}


/*
7. Kesimpulan
- for: digunakan saat jumlah iterasi diketahui
- while: digunakan saat jumlah iterasi tidak diketahui
- do...while: dijalankan minimal sekali
- foreach: khusus array/objek
- break dan continue: kontrol eksekusi loop
- Nested loop: loop di dalam loop
*/

?>
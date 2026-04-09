<?php

//  php basic/07_kondisi_dan_looping/01_kondisi_dan_looping.php (for run)

/*
Materi Ringkasan Conditional dan Looping PHP
File: Conditional_Looping.php
Materi ini menjelaskan dasar penggunaan conditional dan looping di PHP 
dengan bahasa sederhana untuk pemula.

Conditional digunakan untuk membuat keputusan berdasarkan kondisi.
Looping digunakan untuk melakukan perulangan kode.
PHP mendukung struktur kondisional dan looping seperti if, else, switch,
for, while, do-while, dan foreach.
php.net adalah sumber dokumentasi resmi.
*/


// ========================
// 1. Conditional IF
// ========================

$nilai = 85;

if ($nilai >= 90) {
    echo "Nilai A";
} elseif ($nilai >= 75) {
    echo "Nilai B";
} else {
    echo "Nilai C";
}


// ========================
// 2. Conditional Switch
// ========================

$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari ini Senin";
        break;
    case "Selasa":
        echo "Hari ini Selasa";
        break;
    default:
        echo "Hari lain";
}


// ========================
// 3. Looping FOR
// ========================

for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i ";
}


// ========================
// 4. Looping WHILE
// ========================

$j = 1;
while ($j <= 5) {
    echo "WHILE ke-$j ";
    $j++;
}


// ========================
// 5. Looping DO-WHILE
// ========================

$k = 1;
do {
    echo "DO-WHILE ke-$k ";
    $k++;
} while ($k <= 5);


// ========================
// 6. Looping FOREACH (Array)
// ========================

$buah = ["apel", "jeruk", "mangga"];

foreach ($buah as $item) {
    echo $item . " ";
}


// ========================
// 7. Break dan Continue
// ========================

for ($x = 1; $x <= 10; $x++) {
    if ($x == 5) {
        break; // keluar dari loop
    }
    echo $x . " ";
}

for ($y = 1; $y <= 5; $y++) {
    if ($y == 3) {
        continue; // melewati iterasi ini
    }
    echo $y . " ";
}


// ========================
// 8. Nested Loop
// ========================

for ($m = 1; $m <= 3; $m++) {
    for ($n = 1; $n <= 2; $n++) {
        echo "m=$m, n=$n ";
    }
}


// ========================
// 9. Ternary Operator
// ========================

$angka = 10;
echo ($angka % 2 == 0) ? "Genap" : "Ganjil";


// ========================
// Kesimpulan
// ========================

/*
Conditional:
- if, elseif, else
- switch
- ternary operator

Looping:
- for
- while
- do-while
- foreach
- nested loop
- break & continue

Conditional dan looping digunakan untuk pengambilan keputusan dan
perulangan program.
*/

?>
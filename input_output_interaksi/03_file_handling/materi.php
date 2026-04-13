<?php

/*
========================================================
MATERI FILE HANDLING PHP (fopen, fread)
File: 03_file_handling_fopen_fread.php

Sumber konsep resmi:
- https://www.php.net/manual/en/function.fopen.php
- https://www.php.net/manual/en/function.fread.php
- https://www.php.net/manual/en/function.fclose.php

========================================================

TUJUAN MATERI
Memahami bagaimana PHP membaca file di server,
seperti membaca .txt, log, atau konfigurasi.

========================================================

1. KONSEP DASAR FILE HANDLING
========================================================

File handling adalah proses:
- membuka file
- membaca isi file
- menulis file
- menutup file

PHP bisa bekerja dengan file di server seperti:
- .txt
- .log
- .csv
- .json

========================================================
*/

echo "1. File handling = operasi membaca/menulis file di server";
echo PHP_EOL;


/*
========================================================
2. FUNGSI fopen()
========================================================

fopen() digunakan untuk membuka file.

Format:
fopen(nama_file, mode)

Mode penting:
- "r" = read (baca)
- "w" = write (tulis, overwrite)
- "a" = append (tambah di akhir)

========================================================
*/

$fileName = "data.txt";

// simulasi (biasanya file benar-benar ada di server)
$fileContent = "Ini isi file contoh\nBaris kedua\nBaris ketiga";

/*
Dalam kondisi nyata:
$file = fopen("data.txt", "r");
*/

echo "2. fopen() digunakan untuk membuka file";
echo PHP_EOL;


/*
========================================================
3. FUNGSI fread()
========================================================

fread() digunakan untuk membaca isi file
yang sudah dibuka dengan fopen().

Format:
fread(resource, panjang_byte)

========================================================
*/

// simulasi file pointer
$filePointer = true; // anggap file berhasil dibuka

if ($filePointer) {

    // simulasi isi file
    $data = $fileContent;

    echo "3. Isi file:";
    echo PHP_EOL;
    echo $data;
}

echo PHP_EOL;


/*
========================================================
4. FUNGSI fclose()
========================================================

fclose() digunakan untuk menutup file.

Kenapa harus ditutup?
- menghemat memori
- menghindari file lock
- menjaga performa server

========================================================
*/

$fileOpened = true;

if ($fileOpened) {
    echo "4. File ditutup dengan fclose()";
}

echo PHP_EOL;


/*
========================================================
5. CONTOH REAL CODE (READ FILE)
========================================================
*/

// membuat file simulasi
file_put_contents("contoh.txt", "Halo ini file PHP\nBaris kedua file\nBaris ketiga file");

// membuka file
$handle = fopen("contoh.txt", "r");

if ($handle) {

    // ukuran file
    $size = filesize("contoh.txt");

    // membaca isi file
    $content = fread($handle, $size);

    echo "5. Isi file contoh.txt:";
    echo PHP_EOL;
    echo $content;

    fclose($handle);
}

echo PHP_EOL;


/*
========================================================
6. KESALAHAN UMUM
========================================================

1. File tidak ditemukan
   → fopen gagal

2. Tidak pakai fclose
   → memory leak

3. fread tanpa filesize
   → data tidak terbaca lengkap

========================================================
*/


/*
========================================================
7. CEK FILE ADA ATAU TIDAK
========================================================
*/

if (file_exists("contoh.txt")) {
    echo "7. File ditemukan";
} else {
    echo "7. File tidak ditemukan";
}

echo PHP_EOL;


/*
========================================================
8. PERBEDAAN fopen vs file_get_contents
========================================================

fopen:
- fleksibel
- cocok file besar
- bisa baca bertahap

file_get_contents:
- lebih simple
- cocok file kecil

========================================================
*/

echo "8. fopen = fleksibel | file_get_contents = simple";
echo PHP_EOL;


/*
========================================================
9. CONTOH MINI REAL CASE (LOG FILE)
========================================================
*/

// simulasi log
file_put_contents("log.txt", "USER LOGIN: admin\nTIME: 12:00\n");

// membaca log
$log = fopen("log.txt", "r");

if ($log) {

    $logSize = filesize("log.txt");
    $logData = fread($log, $logSize);

    echo "9. Log system:";
    echo PHP_EOL;
    echo $logData;

    fclose($log);
}

echo PHP_EOL;


/*
========================================================
10. KESIMPULAN BESAR
========================================================

- fopen = membuka file
- fread = membaca isi file
- fclose = menutup file
- file handling penting untuk:
  logging, konfigurasi, data sederhana

FLOW:
OPEN → READ → CLOSE

========================================================
*/

echo "10. Selesai: Kamu sudah memahami file handling dasar PHP";

?>
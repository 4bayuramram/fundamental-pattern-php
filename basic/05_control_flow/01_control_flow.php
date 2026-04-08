<?php

/*
Materi Ringkasan Control Flow PHP (if & switch)
jalankan file : php basic/05_control_flow/01_control_flow.php 
Sumber: Dokumentasi Resmi PHP (php.net)

Control flow digunakan untuk mengatur alur program berdasarkan kondisi tertentu.
Materi ini fokus pada:
- if, elseif, else
- switch
*/

/*
1. IF (Kondisi sederhana)
Digunakan untuk menjalankan kode jika kondisi bernilai true
*/

$nilai = 80;

if ($nilai >= 75) {
    echo "Lulus";
}


/*
2. IF ELSE
Jika kondisi salah, maka blok else dijalankan
*/

$umur = 17;

if ($umur >= 18) {
    echo "Dewasa";
} else {
    echo "Belum Dewasa";
}


/*
3. IF ELSEIF ELSE
Digunakan untuk banyak kondisi
*/

$score = 85;

if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} else {
    echo "D";
}


/*
4. Nested IF (IF bersarang)
IF di dalam IF
*/

$login = true;
$role = "admin";

if ($login) {
    if ($role == "admin") {
        echo "Akses admin";
    }
}


/*
5. SWITCH
Digunakan untuk banyak kondisi dengan nilai yang sama
Lebih rapi dibanding banyak elseif
*/

$hari = "Senin";

switch ($hari) {
    case "Senin":
        echo "Hari kerja";
        break;
    case "Sabtu":
    case "Minggu":
        echo "Weekend";
        break;
    default:
        echo "Hari tidak diketahui";
}


/*
6. SWITCH tanpa break (fall-through)
Jika tidak ada break, maka akan lanjut ke case berikutnya
*/

$angka = 1;

switch ($angka) {
    case 1:
        echo "Satu ";
    case 2:
        echo "Dua";
        break;
}
// Output: Satu Dua


/*
7. Alternatif syntax (untuk HTML)
Cocok digunakan dalam template
*/

$nilai2 = 60;

if ($nilai2 >= 75):
    echo "Lulus";
else:
    echo "Tidak Lulus";
endif;


/*
8. Ternary Operator
Penulisan singkat dari if else
*/

$umur2 = 20;

$status = ($umur2 >= 18) ? "Dewasa" : "Anak";
echo $status;


/*
9. Null Coalescing Operator (??)
Digunakan untuk cek apakah variabel ada atau tidak
*/

$username = $_GET['username'] ?? "Guest";
echo $username;


/*
Kesimpulan
- if digunakan untuk kondisi sederhana hingga kompleks
- switch digunakan untuk banyak kondisi dengan nilai tetap
- ternary untuk penulisan singkat
- null coalescing untuk default value
*/

?>

<?php

/*
Materi Ringkasan Output PHP
File: Output.php
Materi ini menjelaskan dasar output PHP (echo dan print) dengan bahasa sederhana
untuk pemula, berdasarkan dokumentasi resmi PHP.

Output digunakan untuk menampilkan teks, angka, variabel, maupun HTML
ke browser. Fungsi yang paling umum adalah echo dan print.
Keduanya mirip, tetapi memiliki beberapa perbedaan kecil.

jalankan file 
 php basic/04_output/01_output.php 
*/


/*
1. echo
echo adalah konstruk bahasa (bukan fungsi) untuk menampilkan output.
- Bisa menerima banyak argumen dipisah koma
- Lebih cepat sedikit dibanding print
- Tidak mengembalikan nilai
*/

echo "Halo PHP";
echo "Belajar", " ", "PHP"; // multiple argument


/*
2. print
print juga konstruk bahasa untuk menampilkan output.
- Hanya menerima satu argumen
- Mengembalikan nilai 1
- Sedikit lebih lambat dari echo (perbedaan tidak signifikan)

*/

print "Belajar PHP dengan print";
// $hasil = print "tes"; // mengembalikan 1



/*
3. Perbedaan echo vs print
- echo bisa banyak argumen, print hanya satu
- echo tidak mengembalikan nilai, print mengembalikan 1
- Keduanya untuk output dan bisa menampilkan string atau variabel
*/

$nama = "Budi";
echo "Nama saya: ", $nama;
print "Nama kamu: " . $nama;



/*
4. Menampilkan HTML
echo dan print bisa langsung menampilkan HTML 
tanpa perlu fungsi khusus.
*/

echo "<h1>Judul</h1>";
print "<p>Paragraf HTML</p>";



/*
5. Output dengan variabel dan string interpolation
PHP mendukung interpolasi pada string double quotes
*/

$umur = 20;
echo "Umur saya $umur tahun";



/*
6. Concatenation (penggabungan string)
Menggunakan operator titik (.)
*/

echo "Nama: " . $nama . " Umur: " . $umur;



/*
7. Output untuk debugging
print_r() digunakan menampilkan isi variabel/array dalam format terbaca
var_dump() menampilkan tipe dan detail struktural variabel
var_export() mengekspor variabel dalam bentuk kode PHP yang valid
*/

$data = ["PHP", "HTML", "CSS"];

print_r($data);
var_dump($data);
var_export($data);



/*
8. Echo shortcut di dalam HTML (short_open_tags)
Jika short_open_tag aktif, bisa gunakan <?= ?>
*/

?>

<!DOCTYPE html>
<html>
<body>

<!-- Menampilkan variabel dalam HTML -->
<?php 
$judul = "Belajar PHP Output";
?>

<h2><?= $judul ?></h2>

</body>
</html>

<?php


/*
9. Buffering Output
PHP bisa menunda output menggunakan output buffering
ob_start() – mulai buffer
ob_get_clean() – ambil isi buffer lalu bersihkan
*/

ob_start();
echo "Kalimat dalam buffer";
$hasilBuffer = ob_get_clean();

echo $hasilBuffer; // tampil setelah buffer dibersihkan



/*
10. Output dan newline
Dalam HTML, "\n" tidak membuat baris baru kecuali dalam source code.
Gunakan <br> untuk baris baru di browser.
*/

echo "Baris pertama\nBaris kedua"; // terlihat di page source
echo "Baris pertama<br>Baris kedua"; // terlihat di browser



/*
11. Keamanan output (XSS)
Saat menampilkan input user, gunakan htmlspecialchars()
*/

$userInput = "<script>alert('xss')</script>";
echo htmlspecialchars($userInput);


/*
12. Kesimpulan
- echo dan print digunakan untuk menampilkan output
- echo lebih fleksibel (banyak argumen), print mengembalikan nilai
- Bisa menampilkan HTML, variabel, dan hasil debugging
- Mendukung concatenation dan interpolasi
- Bisa digunakan bersama output buffering
*/

?>
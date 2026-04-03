<?php

// ==========================
// TUTORIAL TIPE DATA PHP
// ==========================

// Tipe data = jenis nilai dalam variabel

echo "<h1>Tipe Data PHP</h1>";


// STRING
$nama = "Budi";
echo "<p>Nama: $nama</p>";


// INTEGER
$umur = 20;
echo "<p>Umur: $umur</p>";


// FLOAT
$tinggi = 170.5;
echo "<p>Tinggi: $tinggi</p>";


// BOOLEAN
$lulus = true;
echo "<p>Lulus: " . ($lulus ? "Ya" : "Tidak") . "</p>";


// ARRAY
$buah = ["Apel", "Jeruk", "Mangga"];
echo "<p>Buah pertama: " . $buah[0] . "</p>";


// ==========================
// CARA MENJALANKAN FILE PHP
// ==========================

// 1. Install XAMPP / WAMP / MAMP
// 2. Simpan file di folder htdocs
// 3. Buka di browser: http://localhost/namafile.php

// Catatan:
// VS Code hanya untuk menulis kode,
// tidak bisa menjalankan PHP langsung.

?>
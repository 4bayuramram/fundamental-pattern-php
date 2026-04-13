<?php

/*
========================================================
MATERI LENGKAP FORM HANDLING PHP ($_GET & $_POST)
File: 01_form_handling_full.php

Sumber konsep resmi:
- https://www.php.net/manual/en/reserved.variables.get.php
- https://www.php.net/manual/en/reserved.variables.post.php
- https://www.php.net/manual/en/reserved.variables.request.php

========================================================

TUJUAN MATERI
Materi ini bertujuan agar kamu bisa MEMBAYANGKAN bagaimana PHP
menerima data dari user di dunia nyata (web backend), bahkan
tanpa harus langsung praktik di server.

========================================================

GAMBARAN NYATA (REAL-WORLD FLOW)

Bayangkan kamu membuka website login:

1. Kamu membuka halaman login (browser)
2. Kamu mengetik:
   username: admin
   password: 123
3. Kamu klik tombol "Login"
4. Browser mengirim REQUEST ke server:
   - metode: POST
   - data: username + password
5. Server (PHP) menerima data:
   $_POST['username']
   $_POST['password']
6. PHP memproses:
   - cek ke database (nanti di materi lanjut)
7. PHP mengirim RESPONSE:
   - "Login berhasil" atau "Gagal"

INI ADALAH INTI FORM HANDLING

========================================================
*/

/*
========================================================
1. SUPERGLOBAL $_GET (DATA DARI URL)
========================================================

GAMBARAN NYATA:

Kamu klik link:

    https://website.com/search.php?keyword=php

Browser akan mengirim:

    GET /search.php?keyword=php

PHP menangkap:

    $_GET['keyword'] = "php"

*/

$_GET['keyword'] = "php dasar (simulasi URL)";

echo "1. GET (dari URL): " . $_GET['keyword'];
echo PHP_EOL;


/*
========================================================
2. SUPERGLOBAL $_POST (DATA DARI FORM)
========================================================

GAMBARAN NYATA:

Form login:

Username: admin
Password: 123

Ketika tombol submit diklik:

Request:
POST /login.php

Body:
username=admin&password=123

PHP menangkap:
$_POST['username']
$_POST['password']

*/

$_POST['username'] = "admin (simulasi form login)";
$_POST['password'] = "123";

echo "2. POST username: " . $_POST['username'];
echo PHP_EOL;
echo "2. POST password: " . $_POST['password'];
echo PHP_EOL;


/*
========================================================
3. PERBEDAAN REAL USE CASE GET vs POST
========================================================

GET digunakan untuk:
- Search engine
- Filter data
- URL sharing

Contoh:
google.com/search?q=php

POST digunakan untuk:
- Login
- Register
- Upload data
- Transaksi

INTINYA:
GET = terlihat di URL
POST = tidak terlihat di URL
*/

echo "3. GET = search/filter | POST = login/register";
echo PHP_EOL;


/*
========================================================
4. VALIDASI DATA (WAJIB DI DUNIA NYATA)
========================================================

GAMBARAN NYATA:

User bisa saja:
- tidak mengisi form
- mengirim data kosong
- atau bahkan iseng mengirim data rusak

Maka PHP harus cek dulu
*/

$_POST['email'] = "user@example.com";

if (isset($_POST['email'])) {
    echo "4. Email diterima: " . $_POST['email'];
} else {
    echo "4. Email tidak dikirim";
}
echo PHP_EOL;


/*
========================================================
5. REQUEST METHOD (GET / POST)
========================================================

GAMBARAN NYATA:

Browser selalu mengirim METHOD:

- GET  → buka halaman
- POST → kirim form

*/

$_SERVER['REQUEST_METHOD'] = "POST";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    echo "5. Ini request POST (form dikirim)";
} else {
    echo "5. Ini request GET (halaman dibuka)";
}
echo PHP_EOL;


/*
========================================================
6. ALUR SEBENARNYA DI BACKEND PHP
========================================================

USER (browser)
    ↓
REQUEST (GET/POST)
    ↓
PHP menerima data ($_GET / $_POST)
    ↓
VALIDASI data
    ↓
PROSES (logika / database)
    ↓
RESPONSE (HTML / JSON)

*/

echo "6. Flow: User → Request → PHP → Process → Response";
echo PHP_EOL;


/*
========================================================
7. MASALAH NYATA DI DUNIA WEB
========================================================

TANPA isset():
- bisa error "Undefined index"

TANPA validasi:
- sistem bisa crash
- data kosong masuk

TANPA sanitasi:
- bisa terkena XSS attack
*/

$inputUser = "<b>Halo</b>";

// sanitasi output (aman untuk web)
echo "7. Input mentah: " . $inputUser . PHP_EOL;
echo "7. Aman ditampilkan: " . htmlspecialchars($inputUser);
echo PHP_EOL;


/*
========================================================
8. $_REQUEST (HINDARI UNTUK PRODUCTION)
========================================================

GAMBARAN:

$_REQUEST = gabungan:
- GET
- POST
- COOKIE

Masalah:
- sumber data tidak jelas
*/

$_REQUEST['data'] = "gabungan GET/POST/COOKIE";

echo "8. REQUEST (tidak direkomendasikan): " . $_REQUEST['data'];
echo PHP_EOL;


/*
========================================================
9. CONTOH MINI REAL CASE (LOGIN SIMULASI)
========================================================

GAMBARAN FORM LOGIN:

Username: admin
Password: 123

*/

$_POST['username'] = "admin";
$_POST['password'] = "123";

// simulasi validasi sederhana
if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
    echo "9. Login berhasil (simulasi)";
} else {
    echo "9. Login gagal";
}
echo PHP_EOL;


/*
========================================================
10. KESIMPULAN BESAR (MENTAL MODEL)
========================================================

PHP tidak bekerja sendiri
PHP selalu menerima REQUEST dari browser
$_GET = URL
$_POST = form
Validasi itu WAJIB
Sanitasi itu WAJIB
Semua web backend selalu mengikuti alur:

USER → REQUEST → PHP → RESPONSE

========================================================
*/

echo "10. Selesai: Kamu sudah memahami mental model form handling PHP";

?>
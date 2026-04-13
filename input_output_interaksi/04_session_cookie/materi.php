<?php

/*
========================================================
MATERI SESSION & COOKIE DALAM PHP
File: 04_session_cookie.php

Sumber konsep resmi:
- https://www.php.net/manual/en/book.session.php
- https://www.php.net/manual/en/function.setcookie.php

========================================================

TUJUAN MATERI
Memahami cara PHP menyimpan data sementara:
- Session (di server)
- Cookie (di browser)

========================================================

1. MASALAH DASAR DI WEB
========================================================

HTTP itu stateless, artinya:
- setiap request berdiri sendiri
- server TIDAK mengingat user secara otomatis

Contoh masalah:
- setelah login, server tidak tahu siapa kamu
- setiap halaman dianggap user baru

Solusi:
- Session
- Cookie

========================================================
*/

echo "1. HTTP itu stateless (tidak menyimpan status user)";
echo PHP_EOL;


/*
========================================================
2. COOKIE (DISIMPAN DI BROWSER)
========================================================

Cookie adalah data kecil yang disimpan di browser user.

Ciri-ciri:
- disimpan di client (browser)
- bisa diubah user
- punya expiry time
- otomatis dikirim ke server setiap request

Contoh:
- remember login
- preferensi bahasa
- tracking user

========================================================
*/

echo "2. Cookie = disimpan di browser";
echo PHP_EOL;


/*
========================================================
3. MEMBUAT COOKIE (setcookie)
========================================================

Format:
setcookie(nama, nilai, waktu_expired);

========================================================
*/

// cookie berlaku 1 jam
setcookie("username", "admin", time() + 3600);

echo "3. Cookie 'username' dibuat (admin)";
echo PHP_EOL;


/*
========================================================
4. MENGAMBIL COOKIE
========================================================
*/

$_COOKIE['username'] = "admin (simulasi cookie)";

if (isset($_COOKIE['username'])) {
    echo "4. Cookie ditemukan: " . $_COOKIE['username'];
} else {
    echo "4. Cookie tidak ada";
}

echo PHP_EOL;


/*
========================================================
5. KELEBIHAN & KELEMAHAN COOKIE
========================================================

Kelebihan:
- ringan
- otomatis dikirim browser
- cocok untuk preferensi

Kekurangan:
- bisa dimodifikasi user
- tidak aman untuk data sensitif

JANGAN simpan:
- password
- token rahasia
- data penting

========================================================
*/

echo "5. Cookie tidak aman untuk data sensitif";
echo PHP_EOL;


/*
========================================================
6. SESSION (DISIMPAN DI SERVER)
========================================================

Session adalah data yang disimpan di server.

Ciri-ciri:
- lebih aman dari cookie
- disimpan di server
- hanya ID session dikirim ke browser

Contoh:
- login user
- keranjang belanja
- data sementara

========================================================
*/

echo "6. Session = disimpan di server";
echo PHP_EOL;


/*
========================================================
7. MEMULAI SESSION
========================================================
*/

// wajib sebelum pakai $_SESSION
session_start();

/*
========================================================
8. MENYIMPAN DATA SESSION
========================================================
*/

$_SESSION['user'] = "admin";
$_SESSION['role'] = "admin";

echo "8. Session dibuat untuk user admin";
echo PHP_EOL;


/*
========================================================
9. MENGAMBIL DATA SESSION
========================================================
*/

if (isset($_SESSION['user'])) {
    echo "9. User login: " . $_SESSION['user'];
} else {
    echo "9. User belum login";
}

echo PHP_EOL;


/*
========================================================
10. PERBEDAAN SESSION VS COOKIE
========================================================

COOKIE:
- disimpan di browser
- tidak aman
- mudah diubah
- expire manual

SESSION:
- disimpan di server
- lebih aman
- hilang saat browser ditutup (atau timeout server)
- lebih cocok untuk login

========================================================
*/

echo "10. Session lebih aman daripada cookie";
echo PHP_EOL;


/*
========================================================
11. CONTOH REAL CASE LOGIN SYSTEM
========================================================
*/

// simulasi login berhasil
$_POST['username'] = "admin";
$_POST['password'] = "123";

if ($_POST['username'] == "admin" && $_POST['password'] == "123") {

    $_SESSION['user'] = $_POST['username'];

    setcookie("last_login", date("Y-m-d H:i:s"), time() + 3600);

    echo "11. Login berhasil";
    echo PHP_EOL;
    echo "Session & cookie dibuat";
} else {
    echo "11. Login gagal";
}

echo PHP_EOL;


/*
========================================================
12. MENGHAPUS SESSION & COOKIE
========================================================
*/

// hapus session
unset($_SESSION['user']);

// hapus cookie (expire di masa lalu)
setcookie("username", "", time() - 3600);

echo "12. Session & cookie dihapus";
echo PHP_EOL;


/*
========================================================
KESIMPULAN BESAR
========================================================

- HTTP tidak menyimpan status user
- Cookie = disimpan di browser
- Session = disimpan di server
- Session lebih aman untuk login
- Cookie cocok untuk preferensi

FLOW LOGIN UMUM:
LOGIN → SESSION dibuat → USER dianggap login

========================================================
*/

echo "SELESAI: Kamu sudah memahami session & cookie";

?>
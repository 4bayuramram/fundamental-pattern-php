<?php

/*
========================================================
MATERI SERVER REQUEST / RESPONSE DALAM PHP
File: 02_server_request_response.php

Sumber konsep resmi:
- https://www.php.net/manual/en/reserved.variables.server.php
- https://developer.mozilla.org/en-US/docs/Web/HTTP/Overview

========================================================

TUJUAN MATERI
Memahami bagaimana browser dan server berkomunikasi
menggunakan HTTP Request dan HTTP Response.

========================================================

1. KONSEP DASAR HTTP (WAJIB PAHAM)
========================================================

Web itu bekerja dengan sistem:

CLIENT (Browser)  <----->  SERVER (PHP)

Browser tidak "mengambil data diam-diam",
tetapi selalu mengirim REQUEST terlebih dahulu.

Server hanya MERESPON request tersebut.

========================================================
*/

/*
========================================================
2. APA ITU REQUEST?
========================================================

Request adalah permintaan dari browser ke server.

Contoh request:
- membuka halaman web
- mengirim form login
- mengambil data API

Struktur request:
- Method (GET, POST, PUT, DELETE)
- URL
- Headers
- Body (untuk POST/PUT)

========================================================
*/

echo "2. Request = permintaan dari client ke server";
echo PHP_EOL;


/*
========================================================
3. APA ITU RESPONSE?
========================================================

Response adalah jawaban dari server ke browser.

Isi response bisa berupa:
- HTML
- JSON
- File
- Text
- Error message

========================================================
*/

echo "3. Response = jawaban dari server ke client";
echo PHP_EOL;


/*
========================================================
4. CONTOH ALUR REAL WEBSITE
========================================================

User buka:
https://contoh.com/profile

Browser mengirim:
GET /profile

Server PHP:
- membaca request
- memproses data
- mengirim HTML response

========================================================
*/

echo "4. Browser → Request → PHP → Response → Browser";
echo PHP_EOL;


/*
========================================================
5. SUPERGLOBAL $_SERVER
========================================================

$_SERVER adalah informasi tentang server & request.

Contoh data penting:
- REQUEST_METHOD
- REQUEST_URI
- HTTP_USER_AGENT
- SERVER_NAME

========================================================
*/

// simulasi (biasanya otomatis oleh server)
$_SERVER['REQUEST_METHOD'] = "GET";
$_SERVER['REQUEST_URI'] = "/profile.php";
$_SERVER['HTTP_USER_AGENT'] = "Chrome";

echo "5. Method: " . $_SERVER['REQUEST_METHOD'];
echo PHP_EOL;
echo "5. URI: " . $_SERVER['REQUEST_URI'];
echo PHP_EOL;


/*
========================================================
6. MENDETEKSI REQUEST METHOD
========================================================

Ini penting untuk membedakan:
- halaman dibuka (GET)
- form dikirim (POST)

========================================================
*/

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    echo "6. Halaman dibuka (GET request)";
} else {
    echo "6. Form dikirim (POST request)";
}
echo PHP_EOL;


/*
========================================================
7. SIMULASI REQUEST FORM LOGIN
========================================================
*/

$_SERVER['REQUEST_METHOD'] = "POST";

$_POST['username'] = "admin";
$_POST['password'] = "123";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    echo "7. Menerima POST request (form login)";
    echo PHP_EOL;

    if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
        echo "7. Login berhasil";
    } else {
        echo "7. Login gagal";
    }
}

echo PHP_EOL;


/*
========================================================
8. REQUEST URI (HALAMAN YANG DIMINTA)
========================================================

Contoh:
- /home
- /login
- /product/detail?id=10

========================================================
*/

$_SERVER['REQUEST_URI'] = "/product/detail?id=10";

echo "8. Halaman yang diminta: " . $_SERVER['REQUEST_URI'];
echo PHP_EOL;


/*
========================================================
9. QUERY STRING (DATA DI URL)
========================================================

Contoh:
/search.php?keyword=php

Maka:
keyword = php

========================================================
*/

$_GET['keyword'] = "php server";

echo "9. Query keyword: " . $_GET['keyword'];
echo PHP_EOL;


/*
========================================================
10. PERBEDAAN REQUEST VS RESPONSE
========================================================

REQUEST:
- dikirim oleh browser
- berisi permintaan

RESPONSE:
- dikirim oleh server
- berisi hasil

========================================================
*/

echo "10. Request = masuk | Response = keluar";
echo PHP_EOL;


/*
========================================================
11. KENAPA INI PENTING?
========================================================

Karena semua framework PHP (Laravel, CodeIgniter)
berjalan di atas konsep ini:

- Request masuk
- Controller memproses
- Response keluar

========================================================
*/

echo "11. Semua framework PHP berbasis request-response";
echo PHP_EOL;


/*
========================================================
KESIMPULAN BESAR
========================================================

- Web bekerja dengan HTTP Request & Response
- Browser selalu mengirim request dulu
- Server hanya merespon
- $_SERVER berisi info request
- $_GET dan $_POST bagian dari request

FLOW FINAL:

CLIENT → REQUEST → SERVER (PHP) → RESPONSE → CLIENT

========================================================
*/

echo "SELESAI: Kamu sudah memahami konsep server request-response";

?>
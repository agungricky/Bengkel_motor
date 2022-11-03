<?php
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:dbname=bengkel_motor;host=127.0.0.1';
$user = 'root';
$password = '';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
    // echo 'Sukses Koneksi database';
} catch (PDOException $e) {
    echo 'Terjadi Kesalahan Saat Koneksi/queri dengan sebab' . $e->getMessage();
}

try {
    $koneksi = mysqli_connect("localhost", "root", "", "bengkel_motor");
    // echo 'koneksi aman';
} catch (ErrorException $e) {
    echo 'koneksi gagal' . $e;
}

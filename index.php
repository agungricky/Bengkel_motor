<?php
error_reporting(0);

session_start();
include_once 'koneksi.php';
include_once 'models/query_Sperpart.php';
include_once 'models/query_Pegawai.php';
include_once 'models/query_jabatan.php';
include_once 'models/query_status.php';
include_once 'models/query_customer.php';
include_once 'models/query_Transaksi.php';

include_once 'head.php';

include_once 'Navigasi.php';

$hal = $_REQUEST['hal'];
if (!empty($hal)) {
    include_once $hal . '.php';
} else {
    include_once 'home.php';
}

include_once 'sponsor.php';
include_once 'footer.php';

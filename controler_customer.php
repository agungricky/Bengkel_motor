<?php
session_start();
include_once 'koneksi.php';
include_once 'models/query_customer.php';

//Tangkap Request Form login
$user = $_POST['username'];
$pass = $_POST['pass'];

//Simpan ke array
$data = [$user, $pass];

//Panggil Method customer
$model = new customer();

//proses otentikasi user
$rs = $model->CEKLOGIN($data);
if (!empty($rs)) {
    $_SESSION['MEMBER'] = $rs;
    header('Location:index.php?hal=home');
} else {
    echo '<script>alert("User/password anda salah!!!");history.back();</script>';
}

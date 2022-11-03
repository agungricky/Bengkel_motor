<?php
include_once 'koneksi.php';
include_once 'models/query_order.php';
// include_once 'form_input.php';
//Tangkap Request Form
$Nama = $_POST['Nama'];
$Kunjungan = $_POST['Kunjungan'];
$Plat_Nomor = $_POST['Plat_Nomor'];
$Keluhan = $_POST['Keluhan'];

//Simpan ke array
$data = [$Nama, $Kunjungan, $Plat_Nomor, $Keluhan];

//Panggil Method Sperpart
$model = new Order();

//Tangkap Value button
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        // $notif = "Sukses disimpan";
        break;

    case 'ubah':
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;

    case 'hapus':
        unset($data);
        $model->hapus($_POST['idx']);
        break;

    default:
        header('Location:index.php?hal=form_order');
        break;
}
//jika sudah selesai maka di arahkan ke menu sperpart
header('Location:index.php?hal=form_order');

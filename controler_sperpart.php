<?php
include_once 'koneksi.php';
include_once 'models/query_Sperpart.php';
// include_once 'form_input.php';
//Tangkap Request Form
$jeneng = $_POST['Nama_produk'];
$merek = $_POST['merk'];
$rego_dodol = $_POST['Harga_Jual'];
$rego_tuku = $_POST['Harga_beli'];
$gudang_stok = $_POST['Stok'];
$dino = $_POST['Tanggal_masuk'];

//Simpan ke array
$data = [$jeneng, $merek, $rego_dodol, $rego_tuku, $gudang_stok, $dino];

//Panggil Method Sperpart
$model = new Sperpart();

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
        header('Location:index.php?hal=sperpart');
        break;
}
//jika sudah selesai maka di arahkan ke menu sperpart
header('Location:index.php?hal=sperpart');

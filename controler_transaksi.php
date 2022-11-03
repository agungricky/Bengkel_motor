<?php
include_once 'koneksi.php';
include_once 'models/query_Transaksi.php';
// include_once 'form_input.php';
//Tangkap Request Form
$tanggal = $_POST['tanggal'];
$Kerusakan = $_POST['Kerusakan'];
$total_Bayar = $_POST['total_Bayar'];
$Customer_id = $_POST['Customer_id'];
$Pegawai_id = $_POST['Pegawai_id'];


//Simpan ke array
$data = [$tanggal, $Kerusakan, $total_Bayar, $Customer_id, $Pegawai_id];

//Panggil Method Sperpart
$model = new Riwayat_transaksi();

//Tangkap Value button
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $model->simpan($data);
        // $notif = "Sukses disimpan";
        break;

    case 'hapus':
        //tangkap hidengfild
        unset($data);
        $model->hapus($_POST['idx']);
        break;

    case 'ubah':
        $data[] = $_POST['idx'];
        $model->ubah($data);
        break;

    default:
        header('Location:index.php?hal=Riwayat_transaksi');
        break;
}
//jika sudah selesai maka di arahkan ke menu sperpart
header('Location:index.php?hal=Riwayat_transaksi');

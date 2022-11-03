<?php
include_once 'koneksi.php';
include_once 'models/query_Pegawai.php';

$Nama = $_POST['Nama'];
$Hp = $_POST['No_hp'];
$Alamat = $_POST['Alamat'];
$Jab = $_POST['Jabatan'];
$pendidikan = $_POST['Pendidikan'];
$umur = $_POST['Umur'];
$Statusku = $_POST['stt'];
$foto = $_POST['Foto'];
$motivasi = $_POST['Motivasi'];

$data = [$Nama, $Hp, $Alamat, $Jab, $pendidikan, $umur, $Statusku, $foto, $motivasi];

$dataku = new Team();
$tombol = $_REQUEST['proses'];
switch ($tombol) {
    case 'simpan':
        $dataku->simpan($data);
        // header('Location:index.php?hal=home');
        break;
    case 'ubah':
        $data[] = $_POST['idx'];
        $dataku->ubah($data);
        break;

    case 'hapus':
        unset($data);
        $dataku->hapus($_POST['idx']);
        break;

    default:
        header('Location:index.php?hal=team');
        break;
}
header('Location:index.php?hal=team');

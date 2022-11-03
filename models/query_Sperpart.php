<?php
// include_once 'form_input.php';
class Sperpart
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function Tampil_Sperpart()
    {
        include_once 'koneksi.php';
        $sql = "SELECT Nama_produk, Harga_Jual, Stok FROM sperpart";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getSperpart($id)
    {
        $sql = "SELECT * FROM sperpart WHERE id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        include_once 'koneksi.php';
        $sql = "INSERT INTO sperpart (Nama_produk, merk, Harga_Jual, Harga_beli, Stok, Tanggal_masuk) VALUES (?, ?, ?, ?, ?, ?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {
        $sql = "UPDATE sperpart SET Nama_produk=?, merk=?, Harga_Jual=?, Harga_beli=?, Stok=?,Tanggal_masuk=? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM sperpart WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}

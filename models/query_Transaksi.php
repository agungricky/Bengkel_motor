<?php
// Riwayat TRANSAKSI
class Riwayat_transaksi
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function Riwayat()
    {
        include_once 'koneksi.php';
        $sql = "SELECT pelayanan.id, customer.Nama as customer, tanggal, Kerusakan, total_Bayar, pegawai.Nama as pegawai
        FROM pelayanan
        INNER JOIN customer ON customer.id = pelayanan.Customer_id
        INNER JOIN pegawai ON pegawai.id = pelayanan.Pegawai_id";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function getPelayanan($id)
    {
        $sql = "SELECT * FROM pelayanan WHERE id = ?";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        include_once 'koneksi.php';
        $sql = "INSERT INTO pelayanan(tanggal, Kerusakan, total_Bayar, Customer_id, Pegawai_id) VALUES 
        (?,?,?,?,?)";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM pelayanan WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }

    public function dataPegawai()
    {
        $sql = "SELECT * FROM pegawai";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function dataCustomer()
    {
        $sql = "SELECT * FROM customer";
        //menggunakan mekanisme prepare statement PDO
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    public function ubah($data)
    {
        $sql = "UPDATE pelayanan SET tanggal = ?, Kerusakan = ?, total_Bayar = ?, Customer_id = ?,Pegawai_id = ? WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }
}

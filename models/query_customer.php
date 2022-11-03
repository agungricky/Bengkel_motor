<?php
class customer
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    //Menampilkan data Pegawai Halaman Team
    public function member()
    {
        include_once 'koneksi.php';
        $sql = "SELECT * FROM customer";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    //Menampilkan Detail Pegawai
    public function Get_member($id)
    {
        include_once 'koneksi.php';
        $sql = "SELECT * FROM customer WHERE id = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        include_once 'koneksi.php';
        $sql = "INSERT INTO customer(Nama, No_hp, Alamat, Gender, email, password, role, foto) VALUES (?,?,?,?,?,SHA1(MD5(SHA1(?))),?,?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {
        $sql = "UPDATE customer SET Nama = ?, No_hp = ?, Alamat = ?, Gender = ?, email = ?, password = SHA1(MD5(SHA1(?))), role = ?, foto = ? WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM customer WHERE id=?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }

    public function CEKLOGIN($data)
    {
        // include_once 'koneksi.php';
        $sql = "SELECT * FROM customer WHERE email = ? AND password = SHA1(MD5(SHA1(?)))";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
        $rs = $ps->fetch();
        return $rs;
    }
}

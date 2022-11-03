<?php
class Team
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    //Menampilkan data Pegawai Halaman Team
    public function pegawai()
    {
        include_once 'koneksi.php';
        $sql = "select pegawai.*, jabatan.Posisi,status.Status
        from pegawai 
        join jabatan on jabatan.id = pegawai.Jabatan 
        join status on status.id = pegawai.Status
        ORDER BY pegawai.id ASC";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }

    //Menampilkan Detail Pegawai
    public function Get_pegawai($id)
    {
        include_once 'koneksi.php';
        $sql = "select pegawai.*, jabatan.Posisi,status.Status
        from pegawai 
        join jabatan on jabatan.id = pegawai.Jabatan 
        join status on status.id = pegawai.Status
        WHERE pegawai.id = ?";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function simpan($data)
    {
        include_once 'koneksi.php';
        $sql = "INSERT INTO pegawai(Nama, No_hp, Alamat, Jabatan, Pendidikan, Umur, Status, Foto, Motivasi) VALUES (?,?,?,?,?,?,?,?,?)";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function ubah($data)
    {
        $sql = "UPDATE pegawai SET Nama=?,No_hp=?,Alamat=?,Jabatan=?,Pendidikan=?,Umur=?,Status=?,Foto=?,Motivasi=? WHERE id =?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM pegawai WHERE id = ?";
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }
}

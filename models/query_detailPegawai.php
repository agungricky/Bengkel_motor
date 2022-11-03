<?php
class Details_Pegawai
{
    private $koneksi;

    public function __construct()
    {
        global $dbh;
        $this->koneksi = $dbh;
    }

    public function detailpegawai()
    {
        include_once 'koneksi.php';
        $sql = "SELECT * FROM tampil_details";

        $ps = $this->koneksi->prepare($sql);
        $ps->execute();
        $rs = $ps->fetchAll();
        return $rs;
    }
}

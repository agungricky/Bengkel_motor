<?php
include_once 'models/query_Transaksi.php';
$model = new Riwayat_transaksi();
$data = $model->Riwayat();
?>
<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Riwayat Transaksi</h2>
            <p>Halaman Ini bertujuan Untuk Memberikan Informasi Riwayat Transaksi</p>
        </div>

        <div class="row">
            <div class="col-6 m-auto text-center">
                <button type="button" class="btn btn-success">
                    <a href="index.php?hal=form_transaksi" class="button_input">Input</a>
                </button>
            </div>


            <table class="table table-dark table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Kerusakan</th>
                        <th scope="col">Total Bayar</th>
                        <th scope="col">Pegawai</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($data as $dt) {
                        ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $dt['customer'] ?></td>
                        <td><?= $dt['tanggal'] ?></td>
                        <td><?= $dt['Kerusakan'] ?></td>
                        <td><?= $dt['total_Bayar'] ?></td>
                        <td><?= $dt['pegawai'] ?></td>
                        <td>
                            <form action="controler_transaksi.php" method="POST">
                                <!-- edit -->
                                <a href="index.php?hal=form_transaksi&idedit=<?= $dt['id'] ?>">
                                    <button type="button" class="btn btn-warning btn-sm" title="Ubah Pegawai">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                </a>
                                <!-- Hapus -->
                                <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Pegawai">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                                <input type="hidden" name="idx" value="<?= $dt['id'] ?>">
                            </form>
                        </td>
                    </tr>
                <?php $no++;
                        } ?>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</section><!-- End Team Section -->
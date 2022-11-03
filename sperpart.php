<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Sperpart</h2>
            <p>Semua Sperpart di Bengkel Kami Baru dan Bergaransi</p>
        </div>

        <div class="row">
            <?php
            include_once 'koneksi.php';
            $sql = "SELECT id, Nama_produk, Harga_Jual, Stok FROM sperpart";
            $sperpart = $dbh->query($sql);
            ?>

            <div class="col-6 m-auto mb-3 text-center">
                <button type="button" class="btn btn-success btn-sm"> <a href="index.php?hal=form_sperpart" class="button_input">Input</a></button>
            </div>


            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($sperpart as $row) {
                        ?>
                    <tr>
                        <th scope="row"><?= $no ?></th>
                        <td><?= $row['Nama_produk'] ?></td>
                        <td><?= $row['Harga_Jual'] ?></td>
                        <td><?= $row['Stok'] ?></td>

                        <form action="controler_sperpart.php" method="POST">
                            <td>
                                <!-- Edit -->
                                <a href="index.php?hal=form_sperpart&idedit=<?= $row['id'] ?>">
                                    <button type="button" class="btn btn-warning btn-sm" title="Ubah Pegawai">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </button>
                                </a>

                                <!-- Hapus -->
                                <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Pegawai">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                                </button>
                                <input type="hidden" name="idx" value="<?= $row['id'] ?>" />
                            </td>
                        </form>
                    </tr>
                <?php $no++;
                        } ?>
                </tr>
                </tbody>
            </table>
        </div>

    </div>
</section><!-- End Team Section -->
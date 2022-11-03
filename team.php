<?php
$model = new Team();
$data_pegawai = $model->pegawai();

$sesi = $_SESSION['MEMBER'];
if (isset($sesi)) {
?>
    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Team</h2>
                <p>Semua Team Kami Sangat profesional</p>
            </div>

            <div class="col-6 m-auto text-center">
                <button type="button" class="btn btn-success"> <a href="index.php?hal=form_pegawai" class="button_input">Input</a></button>
            </div>
            <div class="row">
                <table class="table table-striped-columns mt-3">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Posisi</th>
                            <th scope="col">Status</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($data_pegawai as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $row['Nama'] ?></td>
                                <td><?= $row['Umur'] ?></td>
                                <td><?= $row['Posisi'] ?></td>
                                <td><?= $row['Status'] ?></td>
                                <td><?= $row['Alamat'] ?></td>
                                <td><img src="images/<?= $row['Foto'] ?>" width="50px" /></td>

                                <form action="controler_pegawai.php" method="POST">
                                <td>
                                    <!-- Tampil detail -->
                                    <a href="index.php?hal=detail_pegawai&id=<?= $row['id'] ?>">
                                        <button type="button" class="btn btn-success btn-sm" title="Ubah Pegawai">
                                            <i class="fa-solid fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </a>

                                    <!-- Edit -->
                                    <a href="index.php?hal=form_pegawai&idedit=<?= $row['id'] ?>">
                                        <button type="button" class="btn btn-warning btn-sm" title="Ubah Pegawai">
                                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </button>
                                    </a>

                                    <?php
                                    if ($sesi['role'] != 'customer' && 'montir') {
                                    ?>
                                        <!-- Hapus -->
                                        <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus" onclick="return confirm('Anda Yakin Data akan diHapus?')" title="Hapus Pegawai">
                                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                        <input type="hidden" name="idx" value="<?= $row['id'] ?>">
                                    <?php } ?>
                                </td>
                            </form>


                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- End Team Section -->
<?php } else { ?>

<?php echo 'Tidak Ada Halaman Yang di tuju';
} ?>
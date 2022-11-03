<?php
$objTransaksi = new Riwayat_transaksi();

$dataCustomer = $objTransaksi->dataCustomer();
$dataPegawai = $objTransaksi->dataPegawai();

//Tangkap Request idedit di Url (Setelah klik tombol edit)
$idedit = $_REQUEST['idedit'];
$peg = !empty($idedit) ? $objTransaksi->getPelayanan($idedit) : array();
?>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Input Data Transaksi ku</h2>
            <p>Silahkan Masukan Data</p>
        </div>

        <div class="row">
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch m-auto">
                <form action="controler_transaksi.php" method="POST" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" id="nama" placeholder="Nama" value="<?= $peg['tanggal'] ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Kerusakan</label>
                            <input type="text" name="Kerusakan" class="form-control" placeholder="Kerusakan" value="<?= $peg['Kerusakan'] ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Total Bayar</label>
                            <input type="text" name="total_Bayar" class="form-control" id="alamat" placeholder="Total Bayar" value="<?= $peg['total_Bayar'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Customer id</label>
                            <select class="form-select" aria-label="Default select example" name="Customer_id">
                                <option selected>Customer</option>
                                <?php
                                foreach ($dataCustomer as $cus) {
                                    $sel1 = $peg['id'] == $cus['id'] ? 'selected' : '';
                                ?>
                                    <option value="<?= $cus['id'] ?>" <?= $sel1 ?>><?= $cus['Nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Pegawai</label>
                            <select class="form-select" aria-label="Default select example" name="Pegawai_id">
                                <option selected>Pegawai</option>
                                <?php
                                foreach ($dataPegawai as $pgg) {
                                    $sel2 = $peg['id'] == $pgg['id'] ? 'selected' : '';
                                ?>
                                    <option value="<?= $pgg['id'] ?>" <?= $sel2 ?>><?= $pgg['Nama'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
            </div>
            <div class="my-3 text-center">
                <div class="loading">Sudah Yakin?</div>
                <div class="error-message"></div>
                <div class="sent-message">Silahkan Tekan Tombol di bawah. Thank you!</div>
            </div>
            <!-- <div class="text-center">
                <button type="submit" name="proses" value="simpan">Submit</button>
                <button type="submit" name="proses" value="batal" class="btn btn-info-md">Batal</button>
            </div> -->
            <div class="text-center">
                <?php
                // jika form datanya kosong muncul Tombol Submit
                if (empty($idedit)) {
                ?>
                    <button type="submit" name="proses" value="simpan">Submit</button>
                <?php
                } else {
                ?>
                    <button type="submit" name="proses" value="ubah">Ubah</button>
                    <input type="hidden" name="idx" value="<?= $idedit ?>">
                <?php } ?>
                <button type="submit" name="proses" value="batal">Batal</button>
            </div>
            </form>
        </div>

    </div>

    </div>
</section><!-- End Contact Section -->
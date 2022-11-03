<?php
$objJabatan = new Jabatan();
$objStatus = new Status();
$objTeam = new Team();

$data_jabatan = $objJabatan->dataJabatan();
$data_status = $objStatus->dataStatus();
// $data_Tim = $objTeam->pegawai();

$idedit = $_REQUEST['idedit'];
$pegawai = !empty($idedit) ? $objTeam->Get_pegawai($idedit) : array();
?>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Edit Data Pegawai</h2>
            <p>Silahkan Masukan Data</p>
        </div>

        <div class="row">
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch m-auto">
                <form action="controler_pegawai.php" method="POST" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" name="Nama" id="nama" placeholder="Nama" value="<?= $pegawai['Nama'] ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">No Hp</label>
                            <input type="text" name="No_hp" class="form-control" id="hp" placeholder="No Hp" value="<?= $pegawai['No_hp'] ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Alamat</label>
                            <input type="text" name="Alamat" class="form-control" id="alamat" placeholder="Alamat" value="<?= $pegawai['Alamat'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Jabatan</label>
                            <select class="form-select" aria-label="Default select example" name="Jabatan">
                                <option selected>Pilih Jabatan</option>
                                <?php
                                foreach ($data_jabatan as $jab) {
                                    $sel1 = $pegawai['id'] == $jab['id'] ? 'selected' : '';
                                ?>
                                    <option value="<?= $jab['id'] ?>" <?= $sel1 ?>><?= $jab['Posisi'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Pendidikan</label>
                            <input type="text" name="Pendidikan" class="form-control" id="pendidikan" value="<?= $pegawai['Pendidikan'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Umur</label>
                            <input type="text" class="form-control" name="Umur" id="umur" placeholder="Umur" value="<?= $pegawai['Umur'] ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Status</label>
                            <select class="form-select" aria-label="Default select example" name="stt">
                                <option selected>Pilih Status</option>
                                <?php
                                foreach ($data_status as $stt) {
                                    $sel2 = $pegawai['id'] == $stt['id'] ? 'selected' : '';
                                ?>
                                    <option value="<?= $stt['id'] ?>" <?= $sel2 ?>><?= $stt['Status'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Foto</label>
                            <input type="text" class="form-control" name="Foto" id="foto" placeholder="Foto" value="<?= $pegawai['Foto'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Motivasi</label>
                            <input type="text" class="form-control" name="Motivasi" id="motivasi" placeholder="Motivasi" value="<?= $pegawai['Motivasi'] ?>">
                        </div>
                    </div>
            </div>
            <div class="my-3 text-center">
                <div class="loading">Sudah Yakin?</div>
                <div class="error-message"></div>
                <div class="sent-message">Silahkan Tekan Tombol di bawah. Thank you!</div>
            </div>
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
<?php
// include_once 'models/query_Sperpart.php';
// $model = new Sperpart();
$obj_sperpart = new Sperpart();
$dataSperpart = $obj_sperpart->Tampil_Sperpart();

//Tangkap Request idedit di Url (Setelah klik tombol edit)
$idedit = $_REQUEST['idedit'];
$peg = !empty($idedit) ? $obj_sperpart->getSperpart($idedit) : array();
?>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <h2>Input Data</h2>
            <p>Silahkan Masukan Data</p>
        </div>

        <div class="row">
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch m-auto">
                <form action="controler_sperpart.php" method="POST" class="php-email-form">
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" class="form-control" name="Nama_produk" id="Nama_produk" placeholder="Nama" value="<?= $peg['Nama_produk'] ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Merek</label>
                            <input type="text" class="form-control" name="merk" id="merk" value="<?= $peg['merk'] ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Harga Jual</label>
                            <input type="text" name="Harga_Jual" class="form-control" id="Harga_Jual" value="<?= $peg['Harga_Jual'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Harga Beli</label>
                            <input type="text" class="form-control" name="Harga_beli" id="Harga_beli" value="<?= $peg['Harga_beli'] ?>" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Stok</label>
                            <input type="text" name="Stok" class="form-control" id="Stok" value="<?= $peg['Stok'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Tanggal Masuk</label>
                            <input type="date" class="form-control" name="Tanggal_masuk" id="Tanggal_masuk" value="<?= $peg['Tanggal_masuk'] ?>" required>
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
<?php
// if (isset($_POST['proses'])) {
//     mysqli_query($koneksi, "INSERT INTO sperpart set 
//         id = '',
//         Nama_produk = '$_POST[Nama_produk]' , 
//         merk = '$_POST[merk]',
//         Harga_Jual = '$_POST[Harga_Jual]',
//         Harga_beli = '$_POST[Harga_beli]',
//         Stok = '$_POST[Stok]',
//         Tanggal_masuk = '$_POST[Tanggal_masuk]'");
//     echo 'data Tersimpan';
//     header('Location:aksi.php');
// }

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Input Data</h2>
            <p>Silahkan Masukan Data</p>
        </div>

        <div class="row">
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch m-auto">
                <form action="" method="POST" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group">
                            <label for="name">Nama Produk</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Merek</label>
                            <input type="text" class="form-control" name="merk" id="merk" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Harga Jual</label>
                            <input type="text" name="hjual" class="form-control" id="hjual" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Harga Beli</label>
                            <input type="text" class="form-control" name="hbeli" id="hbeli" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="name">Stok</label>
                            <input type="text" name="stok" class="form-control" id="stok" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tgl" id="tgl" required>
                        </div>
                    </div>
            </div>
            <div class="my-3 text-center">
                <div class="loading">Sudah Yakin?</div>
                <div class="error-message"></div>
                <div class="sent-message">Silahkan Tekan Tombol di bawah. Thank you!</div>
                <?= $notif ?>
            </div>
            <input type="submit" name="proses" value="simpan" onclick="coba()">
            </form>
        </div>

    </div>

    </div>
</section><!-- End Contact Section -->
<?php
include 'koneksi.php';
if (isset($_POST['proses'])) {
    mysqli_query($koneksi, "INSERT INTO sperpart set
        id = '', 
        Nama_produk = '$_POST[nama]', 
        merk = '$_POST[merk]', 
        Harga_Jual = '$_POST[hjual]', 
        Harga_beli = '$_POST[hbeli]', 
        Stok = '$_POST[stok]', 
        Tanggal_masuk = '$_POST[tgl]'");
    echo 'data berhasil di simpan';
}

function coba()
{
    $tombol = $_REQUEST['proses'];
    echo $tombol;
}


?>